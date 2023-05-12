<?php

use App\Models\coba_model;
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


// test return view 
Route::get('/cobavararray', function () {
    return view('cobavararray', [
        "title" => "Coba Var Array",
        "data" => coba_model::all()
    ]);
});
