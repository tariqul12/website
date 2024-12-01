<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::latest()->get();
        return view('backend.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {

            if ($request->hasFile('image')) {

                $this->validate($request, [
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // You can also limit the file size here
                ]);


                $image = $request->file('image');

                $imagename = time() . '-' . $image->getClientOriginalName(); // Use a unique name for each file


                $directory = "upload/teamImage/";
                $image->move($directory, $imagename);
                $path = $directory . $imagename;
            }
            $postData = $request->all();

            // If the image was uploaded, add the image path to the post data
            if (isset($path)) {
                $postData['image'] = $path;
            }

            // Create a new Client record
            Team::create($postData);

            return redirect()->back()->with('success', 'Team saved successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::find($id);
        return view('backend.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $team = Team::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '-' . $image->getClientOriginalName();
            $directory = "upload/teamImage/";
            $image->move($directory, $imagename);
            $path = $directory . $imagename;
            $request['image'] = $path;

            // Optionally delete old image from storage
            if ($team->image) {
                \Storage::disk('public')->delete($team->image);
            }
        }

        $team->update($request->all());

        return redirect('teams');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        if ($team->image) {
            // Delete the image file from storage
            Storage::disk('public')->delete($team->image);
        }

        // Delete the Team record
        $team->delete();

        // Redirect back with a success message
        return redirect('teams');
    }
}
