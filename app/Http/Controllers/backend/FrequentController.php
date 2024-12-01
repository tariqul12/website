<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Frequent;
use Illuminate\Http\Request;

class FrequentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frequents = Frequent::latest()->get();
        return view('backend.frequent.index',compact('frequents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.frequent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $postData = $request->all();
       
        Frequent::create($postData);

        return redirect()->back()->with('success', 'Team saved successfully!');
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
        $frequent = Frequent::findOrFail($id);
        return view('backend.frequent.edit',compact('frequent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $frequent=Frequent::findOrFail($id);
        $frequent->update($request->all());
    
        return redirect('frequents');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $frequent = Frequent::findOrFail($id);
    
        // Delete the Team record
        $frequent->delete();
    
        // Redirect back with a success message
        return redirect('frequents');
    }
}
