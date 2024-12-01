<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $policys = Policy::latest()->get();
        return view('backend.policy.index',compact('policys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.policy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $postData = $request->all();
       
        Policy::create($postData);

        return redirect()->back()->with('success', 'Policy saved successfully!');
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
        $policy = Policy::findOrFail($id);
        return view('backend.policy.edit',compact('policy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $frequent=Policy::findOrFail($id);
        $frequent->update($request->all());
    
        return redirect('policies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $frequent = Policy::findOrFail($id);
    
        // Delete the Team record
        $frequent->delete();
    
        // Redirect back with a success message
        return redirect('policies');
    }
}
