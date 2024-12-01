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


            $path = $image->storeAs('images/banners', $imagename, 'public');

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
        $imagename = time() . '-' . $image->getClientOriginalName();

        // Store the image in the 'images/Banners' directory
        $path = $image->storeAs('images/banner', $imagename, 'public');

        // Set the new image path
        $request['image'] = $path;

        // Delete the old image if it exists
        if ($Banner->image) {
            Storage::delete('public/' . $Banner->image);
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

        return redirect()->route('banners.index')
            ->with('success', 'Abouts deleted successfully');
    }
}
