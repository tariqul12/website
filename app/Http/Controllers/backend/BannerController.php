<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::get();

        return view('backend.banner.index', compact('banners'));
    }



    public function create()
    {
        $banners = new Banner();

        return view('backend.banner.create', compact('banners'));
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

            $directory = "upload/banner/";
            $image->move($directory, $imagename);
            $path = $directory . $imagename;

            $request['image'] = $path;
        }
        $postData = $request->all();
        Banner::create($postData);

        return redirect()->route('banners.index')
            ->with('success', 'Client created successfully.');
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('backend.banner.edit', compact('banner'));
    }


    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            // Your other validation rules
            'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image if provided
        ]);

        // Find the existing Banner by its ID
        $Banner = Banner::findOrFail($id);

        // Check if the request has a file for the photos
        if ($request->hasFile('photos')) {
            // Validate the uploaded file
            $this->validate($request, [
                'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // You can also limit the file size here
            ]);

            // Get the uploaded file
            $image = $request->file('photos');

            // Create a unique name for the image
            $imagename = time() . '_' . $image->getClientOriginalExtension();
            $directory = "upload/clientimage/";
            $image->move($directory, $imagename);
            $path = $directory . $imagename;

            // Set the new image path
            $request['image'] = $path;

            // Delete the old image if it exists
            if (file_exists($Banner->image)) {
                unlink($Banner->image);
            }
        }

        // Update the Banner with the request data
        $Banner->update($request->all());

        // Redirect with success message
        return redirect()->route('banners.index')
            ->with('success', 'Banner updated successfully.');
    }

    public function destroy($id)
    {
        $banner = Banner::find($id)->delete();

        if (file_exists($banner->image)) {
            unlink($banner->image);
        }

        return redirect()->route('banners.index')
            ->with('success', 'Abouts deleted successfully');
    }
}
