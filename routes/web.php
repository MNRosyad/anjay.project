<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

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
Route::resource(
    'gallery',
    'App\Http\Controllers\GalleryController'
);

Auth::routes();

Route::get('/posts', [PostController::class, 'index'])->name('index');
Route::get('/projek', [PageController::class, 'projekt'])->name('projekt');
Route::get('/edukasi', [PageController::class, 'education'])->name('education');

Route::get('/galeri', [GalleryController::class, 'index'])->name('index');
Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');
