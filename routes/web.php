<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/categories', App\Http\Controllers\CategoryController::class); 
Route::resource('/posts', App\Http\Controllers\PostController::class);
