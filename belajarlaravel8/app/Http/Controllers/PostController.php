<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_array;

class PostController extends Controller
{
    public function index()
    {
        return view('_array', [
            "title" => "ARRAY",
            "data" => m_array::all()
        ]);
    }
    public function show($slug)
    {
        return view('_post', [
            "title" => "JUDUL TITLE",
            "data" => m_array::find($slug)
        ]);
    }
}
