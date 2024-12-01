<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::get();

        return view('backend.contact.index', compact('contacts'));
    }



    public function create()
    {
        $contacts = new Contact();

        return view('backend.contact.create', compact('contacts'));
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
            $directory = "upload/contactimage/";
            $image->move($directory, $imagename);
            $path = $directory . $imagename;

            $request['image'] = $path;
        }
        $postData = $request->all();
        Contact::create($postData);

        return redirect()->route('contacts.index')
            ->with('success', 'Contact created successfully.');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('backend.contact.edit', compact('contact'));
    }


    public function update(Request $request, $id)
    {


        if ($request->hasFile('photos')) {
            $this->validate($request, [
                'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the image
            ]);

            $image = $request->file('photos');
            $imagename = time() . '-' . $image->getClientOriginalName(); // Generate a unique name
            $directory = "upload/contactimage/";
            $image->move($directory, $imagename); // Move the file to the directory
            $path = $directory . $imagename; // Full path of the image

            $request['image'] = $path; // Add the image path to the request
        }

        // Retrieve the specific record to update
        $contact = Contact::findOrFail($id); // Replace $id with the actual contact ID

        // Update the record with new data
        $postData = $request->all();
        $contact->update($postData);

        return redirect()->route('contacts.index')
            ->with('success', 'Contact updated successfully.');
    }


    public function destroy($id)
    {
        $client = Contact::find($id)->delete();

        return redirect()->route('contacts.index')
            ->with('success', 'Contact deleted successfully');
    }
}
