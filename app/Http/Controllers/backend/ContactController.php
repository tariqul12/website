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

            $path = $image->storeAs('images/contact', $imagename, 'public');

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


        $post = Contact::findOrFail($id);

        $postData = $request->all(); // Get all request data

        // Optionally, validate the data
        $request->validate([

        ]);

        $post->update($postData); // Update the post with new data

        return redirect()->route('contacts.index')
            ->with('success', 'Contact updated successfully');

    }


    public function destroy($id)
    {
        $client = Contact::find($id)->delete();

        return redirect()->route('contacts.index')
            ->with('success', 'Contact deleted successfully');
    }
}
