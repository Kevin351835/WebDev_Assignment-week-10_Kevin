<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['posts' => Post::all()]);
})->name('home');

Route::get('/about', function () {
    return view('about', ['posts' => Post::all()]);
})->name('about');

Route::get('/blog', function () {
    return view('blog', ['posts' => Post::all()]);
})->name('blog');