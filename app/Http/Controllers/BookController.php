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
    public function create(Request $request)
    {
        // Return JSON response with message only, no data sent back
        return response()->json([
            // Message to confirm API call for create
            'message' => 'Create Post',
            // Empty data object
             'data' => $request->all() 
        ], 201); // HTTP status 201 = Created
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $bookData = $request->all();
        return response()->json([
            'message' =>'Book Created Successfully',
            'data' => $bookData 
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response()->json([
            'message'=> 'Book details',
            'data'=>[
                'id' => $id,
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Simulate fetch for editing
        return response()->json([
            'message' => 'Edit book data',
            'data' => [
                'id' => $id,
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Simulate update and return response
        return response()->json([
            'message' => 'Book updated successfully',
            'id' => $id,
            'data' => $request->all()
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
