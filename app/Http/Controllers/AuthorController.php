<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Return a JSON response for one author only
        return response()->json([
            // Success message
            'message' => 'All Authors',
            // One author data
            'data' => [
                'id' => 'auth001',
                'name' => 'John Doe',
                'bio' => 'Author of tech books',
                'nationality' => 'American'
            ]
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //creation response 
        return response()->json([
            'message'=> 'Create Author',
            'data'=> $request->all()
        ],201);
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // storing author
        return response()->json([
            'message' => 'Author Created Sucessfully',
            'data' => $request->all()
            
        ], 201);    
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
