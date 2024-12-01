<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = about::get();

        return view('backend.about.index', compact('abouts'));
    }



    public function create()
    {
        $abouts = new About();

        return view('backend.about.create', compact('abouts'));
    }


    public function store(Request $request)
    {
        // Validate the incoming request
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'future_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'customer_satisfaction_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'trustpilot_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Initialize an array to hold the paths for all the images
        $imagePaths = [];

        // Handle the 'image' field upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName(); // Generate a unique name
            $directory = "upload/aboutimage/"; // Specify the directory
            $image->move($directory, $imageName); // Move the file to the directory
            $imagePaths['image'] = $directory . $imageName; // Store the full path
        }

        // Handle the 'future_image' field upload
        if ($request->hasFile('future_image')) {
            $futureImage = $request->file('future_image');
            $futureImageName = time() . '-' . $futureImage->getClientOriginalName(); // Generate a unique name
            $directory = "upload/aboutimage/"; // Specify the directory
            $futureImage->move($directory, $futureImageName); // Move the file to the directory
            $imagePaths['future_image'] = $directory . $futureImageName; // Store the full path
        }
        if ($request->hasFile('customer_satisfaction_image')) {
            $customerSatisfactionImage = $request->file('customer_satisfaction_image');
            $imageName = time() . '-' . $customerSatisfactionImage->getClientOriginalName(); // Generate a unique name
            $directory = "upload/aboutimage/"; // Specify the directory
            $customerSatisfactionImage->move($directory, $imageName); // Move the file to the directory
            $imagePaths['customer_satisfaction_image'] = $directory . $imageName; // Store the full path
        }
        if ($request->hasFile('trustpilot_image')) {
            $trustpilotImage = $request->file('trustpilot_image');
            $imageName = time() . '-' . $trustpilotImage->getClientOriginalName(); // Generate a unique name
            $directory = "upload/aboutimage/"; // Specify the directory
            $trustpilotImage->move($directory, $imageName); // Move the file to the directory
            $imagePaths['trustpilot_image'] = $directory . $imageName; // Store the full path
        }

        // Merge the image paths into the form data
        $postData = $request->all();
        $postData = array_merge($postData, $imagePaths);  // Merge image paths into form data

        // Create a new record in the About model
        About::create($postData);

        return redirect()->route('abouts.index')
            ->with('success', 'About created successfully.');
    }
    public function edit($id)
    {
        $about = About::find($id);
        return view('backend.about.edit', compact('about'));
    }


    public function update(Request $request, $id)
    {


        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'future_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'customer_satisfaction_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'trustpilot_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Retrieve the existing record from the database
        $about = About::findOrFail($id);  // Find the About record by ID, or fail if not found

        // Initialize an array to hold the paths for all the images
        $imagePaths = [];

        // Handle the 'image' field upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($about->image && \Storage::disk('public')->exists($about->image)) {
                \Storage::disk('public')->delete($about->image);
            }
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName(); // Generate a unique name
            $path = $image->storeAs('images/about', $imageName, 'public');  // Store in public/images/about
            $imagePaths['image'] = $path;  // Store the path in the array
        }

        // Handle the 'future_image' field upload
        if ($request->hasFile('future_image')) {
            // Delete old image if exists
            if ($about->future_image && \Storage::disk('public')->exists($about->future_image)) {
                \Storage::disk('public')->delete($about->future_image);
            }
            $futureImage = $request->file('future_image');
            $futureImageName = time() . '-' . $futureImage->getClientOriginalName(); // Generate a unique name
            $futureImagePath = $futureImage->storeAs('images/about', $futureImageName, 'public');  // Store in public/images/about
            $imagePaths['future_image'] = $futureImagePath;  // Store the path in the array
        }

        // Handle the 'customer_satisfaction_image' field upload
        if ($request->hasFile('customer_satisfaction_image')) {
            // Delete old image if exists
            if ($about->customer_satisfaction_image && \Storage::disk('public')->exists($about->customer_satisfaction_image)) {
                \Storage::disk('public')->delete($about->customer_satisfaction_image);
            }
            $customerSatisfactionImage = $request->file('customer_satisfaction_image');
            $customerSatisfactionImageName = time() . '-' . $customerSatisfactionImage->getClientOriginalName(); // Generate a unique name
            $customerSatisfactionImagePath = $customerSatisfactionImage->storeAs('images/about', $customerSatisfactionImageName, 'public');  // Store in public/images/about
            $imagePaths['customer_satisfaction_image'] = $customerSatisfactionImagePath;  // Store the path in the array
        }

        // Handle the 'trustpilot_image' field upload
        if ($request->hasFile('trustpilot_image')) {
            // Delete old image if exists
            if ($about->trustpilot_image && \Storage::disk('public')->exists($about->trustpilot_image)) {
                \Storage::disk('public')->delete($about->trustpilot_image);
            }
            $trustpilotImage = $request->file('trustpilot_image');
            $trustpilotImageName = time() . '-' . $trustpilotImage->getClientOriginalName(); // Generate a unique name
            $trustpilotImagePath = $trustpilotImage->storeAs('images/about', $trustpilotImageName, 'public');  // Store in public/images/about
            $imagePaths['trustpilot_image'] = $trustpilotImagePath;  // Store the path in the array
        }

        // Merge the image paths into the form data
        $postData = $request->all();
        $postData = array_merge($postData, $imagePaths);  // Merge image paths into form data

        // Update the existing About record with the new data
        $about->update($postData);

        return redirect()->route('abouts.index')
            ->with('success', 'About updated successfully');
    }


    public function destroy($id)
    {
        $about = About::find($id)->delete();

        return redirect()->route('abouts.index')
            ->with('success', 'Abouts deleted successfully');
    }
}
