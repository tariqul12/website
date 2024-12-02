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

        if ($request->hasFile('image')) {

            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // You can also limit the file size here
            ]);
            $image = $request->file('image');
            $imagename = time() . '-' . $image->getClientOriginalName(); // Use a unique name for each fil
            $directory = "upload/banner/";
            $image->move($directory, $imagename);
            $path = $directory . $imagename;
        }
        $postData = $request->all();
        if ($path) {
            $postData['image'] = $path;
        }
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
        // Find the existing record
        $banner = Banner::findOrFail($id);

        // Validate the new image if it exists in the request
        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ensure it meets validation rules
            ]);

            // Delete the old image if it exists
            if (!empty($banner->image) && file_exists($banner->image)) {
                unlink($banner->image);
            }

            // Process the new image
            $image = $request->file('image');
            $imagename = time() . '-' . $image->getClientOriginalName(); // Generate a unique name
            $directory = "upload/banner/"; // Define the upload directory
            $image->move($directory, $imagename); // Move the uploaded file
            $path = $directory . $imagename;

            // Update the request data with the new image path
        }

        // Merge the request data
        $postData = $request->all();
        if ($path) {
            $postData['image'] = $path;
        }

        // Update the existing banner record
        $banner->update($postData);

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
