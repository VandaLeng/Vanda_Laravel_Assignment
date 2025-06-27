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


// Books routes with the author
Route::get('books', [BookController::class, 'index']);
Route::get('books/{id}', [BookController::class, 'show']);
Route::post('books', [BookController::class, 'create']);


// Route::get('/books', [BookController::class, 'index']);
// Route::post('/books/create', [BookController::class, 'create']);    
// Route::get('/books/{id}', [BookController::class, 'show']);         
// Route::put('/books/edit/{id}', [BookController::class, 'update']);
// Route::put('/books/{id}', [BookController::class, 'update']);       
// Route::delete('/books/{id}', [BookController::class, 'destroy']);   

// Authors routes show many book
Route::get('authors/{id}', [AuthorController::class, 'show']);
Route::post('authors', [AuthorController::class, 'create']);

// // API group with prefix 'author'
// Route::prefix('author')->group(function () {
//     // POST methods for testing in Thunder Client
//     Route::post('/index', [AuthorController::class, 'index']);
//     Route::post('/create', [AuthorController::class, 'create']);
//     Route::post('/store', [AuthorController::class, 'store']);
//     Route::post('/show/{id}', [AuthorController::class, 'show']);
//     Route::post('/edit/{id}', [AuthorController::class, 'edit']);
//     Route::post('/update/{id}', [AuthorController::class, 'update']);
//     Route::post('/delete/{id}', [AuthorController::class, 'destroy']);
// });
// Route::prefix('user')->group(function () {
//     Route::get('/index', [UserController::class, 'index']);      
//     Route::post('/create', [UserController::class, 'create']);  
//     Route::get('/show/{id}', [UserController::class, 'show']);   
//     Route::get('/edit/{id}', [UserController::class, 'edit']);   
//     Route::put('/update/{id}', [UserController::class, 'update']);
//     Route::delete('/delete/{id}', [UserController::class, 'destroy']); 
// });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
