<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('utama');
});
Route::get('/about', function () {
    return view('auth.about');
});

Route::resource(
    'posts',
    'App\Http\Controllers\PostController'
);

Auth::routes();

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('index');
Route::get('/projek', [App\Http\Controllers\PageController::class, 'education'])->name('education');
Route::get('/edukasi', [App\Http\Controllers\PageController::class, 'projekt'])->name('projekt');
