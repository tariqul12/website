<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::with('user')->get();

        return view('backend.client.index', compact('clients'));
    }



    public function create()
    {
        $client = new Client();
        $clientdesignation = Client::get()->pluck('name', 'id');
        return view('backend.client.create', compact('client', 'clientdesignation'));
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

            $directory = "upload/categoryimage/";
            $image->move($directory, $imagename);
            $path = $directory . $imagename;

            $request['image'] = $path;
        }
        $postData = $request->all();
        Client::create($postData);

        return redirect()->route('clients.index')
            ->with('success', 'Client created successfully.');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('backend.client.edit', compact('client'));
    }


    public function update(Request $request, $id)
    {
        $post = Client::findOrFail($id);
        $path = null;

        // Optionally, validate the data
        if ($request->hasFile('photos')) {

            $this->validate($request, [
                'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // You can also limit the file size here
            ]);
            $image = $request->file('photos');

            $imagename = time() . '-' . $image->getClientOriginalName(); // Use a unique name for each file

            $directory = "upload/clientimage/";
            $image->move($directory, $imagename);
            $path = $directory . $imagename;
        }
        $postData = $request->all(); // Get all request data

        if ($path) {
            $postData['image'] =  $path;
        }
        $post->update($postData); // Update the post with new data

        return redirect()->route('clients.index')
            ->with('success', 'Client updated successfully');
    }


    public function destroy($id)
    {
        $client = Client::find($id)->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Client deleted successfully');
    }
}
