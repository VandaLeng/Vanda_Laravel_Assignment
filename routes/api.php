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

// Example route with auth middleware (optional)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
