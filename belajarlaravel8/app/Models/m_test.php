<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_test
{
    static $data_nama = [
        [
            "nama" => "fajar",
            "email" => "admin@admin.com"
        ],
        [
            "nama" => "fajarasdasd",
            "email" => "admin@admiassn.com"
        ]
    ];

    static public function all()
    {
        return static::$data_nama;
    }
}
