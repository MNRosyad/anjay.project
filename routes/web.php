<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('utama');
});
Route::get('/about', function () {
    return view('auth.about');
});
Route::get('/edukasi', function () {
    return view('auth.edukasi');
});
Route::get('/projek', function () {
    return view('auth.projek');
});
Route::get('/posts', function () {
    return view('posts.index');
});

Route::resource(
    'posts',
    'App\Http\Controllers\PostController'
);

Auth::routes([
    'reset' => false,
]);

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
