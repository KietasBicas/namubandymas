<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::resource('posts', PostController::class);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts', function () {
//     return view('posts/index');
// })->name('allposts');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
