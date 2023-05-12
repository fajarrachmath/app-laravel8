<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coba_model
{
    static $data_nama = [
        [
            "nama" => "fajar",
            "email" => "admin@admin.com"
        ],
        [
            "nama" => "fajar",
            "email" => "admin@admin.com"
        ]
    ];

    static public function all()
    {
        return static::$data_nama;
    }
}
