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

Route::get('/books', [BookController::class, 'index']);              // Get all books
Route::post('/books/create', [BookController::class, 'create']);    // Create new book
Route::get('/books/{id}', [BookController::class, 'show']);         // Get book by ID
Route::get('/books/edit/{id}', [BookController::class, 'edit']);    // Get book edit form data (optional)
Route::put('/books/{id}', [BookController::class, 'update']);       // Update book by ID
Route::delete('/books/{id}', [BookController::class, 'destroy']);   // Delete book by ID
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
    Route::get('/index', [UserController::class, 'index']);      // Get all users
    Route::post('/create', [UserController::class, 'create']);   // Create user
    Route::get('/show/{id}', [UserController::class, 'show']);   // Get user by id
    Route::get('/edit/{id}', [UserController::class, 'edit']);   // Edit user form data
    Route::put('/update/{id}', [UserController::class, 'update']); // Update user
    Route::delete('/delete/{id}', [UserController::class, 'destroy']); // Delete user
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
