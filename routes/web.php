<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
