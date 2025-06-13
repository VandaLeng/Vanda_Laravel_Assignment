<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; // Correct import with capital A in App

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here you register your API routes for Laravel.
| These routes are loaded by the RouteServiceProvider inside the "api" middleware group.
|
*/

// Route to call index() in BookController
Route::get('/books', [BookController::class, 'index']);
// Route to create book (POST /api/books/create)
Route::post('/books/create', [BookController::class, 'create']);
// Route for storing book data (POST /api/books/store)
Route::post('/books/store', [BookController::class, 'store']);
// GET one book by ID
Route::get('/books/{id}', [BookController::class, 'show']);
// GET for editing one book by ID
Route::get('/books/edit/{id}', [BookController::class, 'edit']);
// PUT to update book
Route::put('/books/{id}', [BookController::class, 'update']);
// Example route with auth middleware (optional)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
