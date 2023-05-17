<?php

use App\Http\Controllers\PostController;
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
Route::get('/_array', [PostController::class, 'index']);
Route::get('/_post/{slug}', [PostController::class, 'show']);


// test return var array 
Route::get('/_test', function () {
    return view('_test', [
        "title" => "TEST",
        "data" => m_test::all()
    ]);
});
