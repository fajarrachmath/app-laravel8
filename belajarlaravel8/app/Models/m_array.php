<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_array
{
    static $data_nama = [
        [
            "slug" => "nama-1",
            "nama" => "fajar",
            "email" => "admin@admin.com"
        ],
        [
            "slug" => "nama-2",
            "nama" => "egi",
            "email" => "akun@akun.com"
        ]
    ];

    static public function all()
    {
        return collect(static::$data_nama);
    }
    static public function find($slug)
    {
        $posts = self::all();
        // $array = [];
        // foreach ($posts as $data) {
        //     if ($data['slug'] === $slug) {
        //         $array = $data;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
