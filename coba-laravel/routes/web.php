<?php

use App\Models\m_array;
use App\Models\m_test;
use Illuminate\Support\Facades\Route;

// test return view and var 
Route::get('/', function () {
    return view('home', [
        "title" => "Wistle Blowing System"
    ]);
});

// test return view 
Route::get('/login', function () {
    return view('login');
});

// test return view 
Route::get('/test', function () {
    return view('test');
});

// test return var array 
Route::get('/_array', function () {
    return view('_array', [
        "title" => "ARRAY",
        "data" => m_array::all()
    ]);
});
// test return var array 
Route::get('_post/{slug}', function ($slug) {
    return view('_post', [
        "title" => "SLUG",
        "data" => m_array::find($slug)
    ]);
});

// test return var array 
Route::get('/_test', function () {
    return view('_test', [
        "title" => "TEST",
        "data" => m_test::all()
    ]);
});
