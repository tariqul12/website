<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Pakage;
use Illuminate\Http\Request;

class PakageController extends Controller
{
    public function index()
    {
        $packages = Pakage::all();

        return view('backend.Pakage.index',compact('packages'));
    }



    public function create()
    {
        $pakage = new Pakage();
        //$clientdesignation = Client::get()->pluck('name','id');
        return view('backend.pakage.create', compact('pakage'));
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


            $path = $image->storeAs('images/categories', $imagename, 'public');

            $request['image'] = $path;
        }
             $postData = $request->all();
             Pakage::create($postData);

        return redirect()->route('packages.index')
            ->with('success', 'Pakage created successfully.');
    }

    public function edit($id)
    {
        $pakage = Pakage::find($id);
        return view('backend.pakage.edit', compact('pakage'));
    }


    public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        // Your other validation rules
        'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image if provided
    ]);

    // Find the existing service by its ID
    $pakage = Pakage::findOrFail($id);

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

        // Store the image in the 'images/services' directory
        $path = $image->storeAs('images/services', $imagename, 'public');

        // Set the new image path
        $request['image'] = $path;

        // Delete the old image if it exists
        if ($pakage->image) {
            Storage::delete('public/' . $pakage->image);
        }
    }

    // Update the service with the request data
    $pakage->update($request->all());

    // Redirect with success message
    return redirect()->route('packages.index')
        ->with('success', 'Pakaige updated successfully.');
}



    public function destroy($id)
    {
        $client = Pakage::find($id)->delete();

        return redirect()->route('packages.index')
            ->with('success', 'Pakaige deleted successfully');
    }
}
