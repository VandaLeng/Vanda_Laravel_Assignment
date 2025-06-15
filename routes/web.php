<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SidebarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Homepage redirects to dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});

// Show Dashboard Page (inside user folder)
Route::get('/dashboard', function () {
    return view('dashboard'); // resources/views/user/dashboard.blade.php
});

// Show User Page
Route::get('/user', function () {
    return view('user.index'); // resources/views/user/index.blade.php
});

// Show Book Page
Route::get('/book', function () {
    return view('book.index'); // resources/views/book/index.blade.php
});

// Show Author Page
Route::get('/author', function () {
    return view('author.index'); // resources/views/author/index.blade.php
});

// Optional sidebar route (if you have controller for it)
Route::get('/sidebar', [SidebarController::class, 'index']);
