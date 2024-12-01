<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('backend.category.index', compact('categories'));
    }



    public function create()
    {
        $category = new Category();
        //$clientdesignation = Client::get()->pluck('name','id');
        return view('backend.category.create', compact('category'));
    }


    public function store(Request $request)
    {
        // request()->validate(Client::$rules);

        if ($request->hasFile('photos')) {

            $this->validate($request, [
                'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // You can also limit the file size here
            ]);


            $image = $request->file('photos');

            $imagename = time() . '-' . $image->getClientOriginalName();
            $directory = "upload/categoryimage/";
            $image->move($directory, $imagename);
            $path = $directory . $imagename;

            $request['image'] = $path;
        }
        $postData = $request->all();
        Category::create($postData);

        return redirect()->route('categories.index')
            ->with('success', 'Client created successfully.');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            // Your other validation rules
            'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image if provided
        ]);

        // Find the existing service by its ID
        $service = Category::findOrFail($id);

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
            $path = $image->storeAs('images/categories', $imagename, 'public');

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
        return redirect()->route('categories.index')
            ->with('success', 'Service updated successfully.');
    }



    public function destroy($id)
    {
        $client = Category::find($id)->delete();

        return redirect()->route('Categories.index')
            ->with('success', 'Client deleted successfully');
    }
}
