<?php

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
Route::get('/test', function () {
    return view('test');
});


// test return view 
Route::get('/cobaarrayvar', function () {
    $data_nama = [
        [
            "nama" => "Rizki Egi",
            "email" => "egi@gmail.com"
        ],
        [
            "nama" => "Ferlistian Rizki",
            "email" => "ferlis@gmail.com"
        ]
    ];

    return view('cobaarrayvar', [
        "title" => "nama_testing",
        "data" => $data_nama
    ]);
});
