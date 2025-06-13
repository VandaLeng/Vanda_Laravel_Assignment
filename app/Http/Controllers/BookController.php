<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Return a JSON response when user calls /api/books
        return response()->json([
            // Message to confirm the API call was successful
            'message' => 'Book successfully',
            // 'data' contains one book object with full structure
            'data' => [
                'id' => '1a2b3c4d',
                'title' => 'Learn Laravel',
                'authorId' => 'author123',
                'isbn' => '978-1-23456-789-0',
                'publicationYear' => 2024,
                'genre' => 'Programming',
                'availableCopies' => 3
            ]
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
