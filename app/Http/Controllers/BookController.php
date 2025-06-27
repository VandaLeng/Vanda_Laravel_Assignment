<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    // Get all books with their author
    public function index()
    {
        $books = Book::with('author')->get();
        return response()->json([
            'message' => 'All books fetched successfully',
            'data' => $books
        ], 200);
    }

    // Create a new book
    public function create(StorePostRequest $request)
    {
        $book = Book::create($request->only(['title', 'isbn', 'publicationYear', 'genre', 'availableCopies', 'author_id']));
        
        return response()->json([
            'message' => 'Book created successfully',
            'data' => $book->load('author')
        ], 201);
    }

    // Store method not used
    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Store method not implemented, use create instead',
        ], 400);
    }

    // Get one book by ID with its author
    public function show(string $id)
    {
        $book = Book::with('author')->find($id);
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

    // Show book data for editing
    public function edit(UpdateBookRequest $request, string $id)
    {
        $book = Book::with('author')->find($id);
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
    public function update(UpdateBookRequest $request, string $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'message' => 'Book not found'
            ], 404);
        }

        $book->update($request->only(['title', 'isbn', 'publicationYear', 'genre', 'availableCopies', 'author_id']));

        return response()->json([
            'message' => 'Book updated successfully',
            'data' => $book->load('author')
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