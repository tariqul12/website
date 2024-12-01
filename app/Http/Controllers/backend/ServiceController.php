<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();

        return view('backend.service.index', compact('services'));
    }



    public function create()
    {
        $service = new Service();
        //$clientdesignation = Client::get()->pluck('name','id');
        return view('backend.service.create', compact('service'));
    }


    public function store(Request $request)
    {
        // request()->validate(Client::$rules);

        if ($request->hasFile('photos')) {

            $this->validate($request, [
                'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // You can also limit the file size here
            ]);


            $image = $request->file('photos');

            $imagename = time() . '-' . $image->getClientOriginalName(); // Use a unique name for each file

            $directory = "upload/servicesimage/";
            $image->move($directory, $imagename);
            $path = $directory . $imagename;

            $request['image'] = $path;
        }
        $postData = $request->all();
        Service::create($postData);

        return redirect()->route('services.index')
            ->with('success', 'Client created successfully.');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.service.edit', compact('service'));
    }


    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            // Your other validation rules
            'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image if provided
        ]);

        // Find the existing service by its ID
        $service = Service::findOrFail($id);

        // Check if the request has a file for the photos
        if ($request->hasFile('photos')) {
            // Validate the uploaded file
            $this->validate($request, [
                'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // You can also limit the file size here
            ]);

            // Get the uploaded file
            $image = $request->file('photos');

            // Create a unique name for the image
            $imagename = time() . '-' . $image->getClientOriginalName();

            $directory = "upload/servicesimage/";
            $image->move($directory, $imagename);
            $path = $directory . $imagename;

            // Set the new image path
            $request['image'] = $path;

            // Delete the old image if it exists
            if ($service->image) {
                Storage::delete('public/' . $service->image);
            }
        }

        // Update the service with the request data
        $service->update($request->all());

        // Redirect with success message
        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully.');
    }



    public function destroy($id)
    {
        $client = Service::find($id)->delete();

        return redirect()->route('services.index')
            ->with('success', 'Client deleted successfully');
    }
}
