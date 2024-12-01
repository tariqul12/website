<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tcondition;
use Illuminate\Http\Request;

class TconditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tconditons = Tcondition::latest()->get();
        return view('backend.tconditon.index',compact('tconditons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.tconditon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $postData = $request->all();
       
        Tcondition::create($postData);

        return redirect()->back()->with('success', 'tconditon saved successfully!');
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
        $tconditon = Tcondition::findOrFail($id);
        return view('backend.tconditon.edit',compact('tconditon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tconditon=Tcondition::findOrFail($id);
        $tconditon->update($request->all());
    
        return redirect('tconditons');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tconditon = Tcondition::findOrFail($id);
    
        // Delete the Team record
        $tconditon->delete();
    
        // Redirect back with a success message
        return redirect('tconditons');
    }
}
