<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; // Correct import with Bookcontroller
use App\Http\Controllers\AuthorController;// Correct import with Authorcontroller
use App\Http\Controllers\UserController;// Correct import with Usercontroller


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
// DELETE to remove book
Route::delete('/books/{id}', [BookController::class, 'destroy']);
// Example route with auth middleware (optional)


// API group with prefix 'author'
Route::prefix('author')->group(function () {
    // POST methods for testing in Thunder Client
    Route::post('/index', [AuthorController::class, 'index']);
    Route::post('/create', [AuthorController::class, 'create']);
    Route::post('/store', [AuthorController::class, 'store']);
    Route::post('/show/{id}', [AuthorController::class, 'show']);
    Route::post('/edit/{id}', [AuthorController::class, 'edit']);
    Route::post('/update/{id}', [AuthorController::class, 'update']);
    Route::post('/delete/{id}', [AuthorController::class, 'destroy']);
});
Route::prefix('user')->group(function () {
    Route::post('/index', [UserController::class, 'index']);
     Route::post('/create', [UserController::class, 'create']);

});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
