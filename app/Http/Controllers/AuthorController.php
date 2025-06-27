<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::with('books')->get();
        return response()->json([
            'message' => 'All authors fetched successfully',
            'data' => $authors
        ], 200);
    }

    /**
     * Create a new author
     */
    public function create(StoreAuthorRequest $request)
    {
        $author = Author::create($request->only(['name', 'bio', 'nationality']));
        
        return response()->json([
            'message' => 'Author created successfully',
            'data' => $author->load('books')
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Store method not implemented, use create instead',
        ], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Author::with('books')->find($id);
        if (!$author) {
            return response()->json([
                'message' => 'Author not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Author found successfully',
            'data' => $author
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::with('books')->find($id);
        if (!$author) {
            return response()->json([
                'message' => 'Author not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Author edit form fetched successfully',
            'data' => $author
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, string $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'message' => 'Author not found'
            ], 404);
        }

        $author->update($request->only(['name', 'bio', 'nationality']));

        return response()->json([
            'message' => 'Author updated successfully',
            'data' => $author->load('books')
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'message' => 'Author not found'
            ], 404);
        }

        $author->delete(); // Books are deleted via cascade

        return response()->json([
            'message' => 'Author deleted successfully',
            'id' => $id
        ], 200);
    }
}