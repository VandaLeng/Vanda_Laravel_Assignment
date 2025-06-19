<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Get all books
    public function index()
    {
        $books = Book::all();
        return response()->json([
            'message' => 'All books fetched successfully',
            'data' => $books
        ], 200);
    }

    // Create a new book
    public function create(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string',
                'isbn' => 'required|string|unique:books',
                'publicationYear' => 'required|integer',
                'genre' => 'required|string',
                'availableCopies' => 'required|integer',
            ]);

            $book = Book::create($request->all());

            return response()->json([
                'message' => 'Book created successfully',
                'data' => $book
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    // Store method can be removed or return error
    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Store method not implemented, use create instead',
        ], 400);
    }

    // Get one book by ID
    public function show(string $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json([
                'message' => 'Book not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Book found successfully',
            'data' => $book
        ], 200);
    }

    // Show book data for editing (optional)
    public function edit(string $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json([
                'message' => 'Book not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Book edit form fetched successfully',
            'data' => $book
        ], 200);
    }

    // Update book by ID
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json([
                'message' => 'Book not found'
            ], 404);
        }

        $request->validate([
            'title' => 'sometimes|required|string',
            'isbn' => 'sometimes|required|string|unique:books,isbn,' . $id,
            'publicationYear' => 'sometimes|required|integer',
            'genre' => 'sometimes|required|string',
            'availableCopies' => 'sometimes|required|integer',
        ]);

        $book->update($request->all());

        return response()->json([
            'message' => 'Book updated successfully',
            'data' => $book
        ], 200);
    }

    // Delete book by ID
    public function destroy(string $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json([
                'message' => 'Book not found'
            ], 404);
        }

        $book->delete();

        return response()->json([
            'message' => 'Book deleted successfully',
            'id' => $id
        ], 200);
    }
}
