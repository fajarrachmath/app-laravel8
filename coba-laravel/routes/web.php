<?php

use Illuminate\Support\Facades\Route;

// test return view and var 
Route::get('/', function () {
    return "Halaman Home";
});

// test return view and var 
Route::get('/about', function () {
    return view('about');
});

// test return view and var 
Route::get('/blog', function () {
    return view('post');
});
