<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function dataDummy()
    {
        $kelas = [
            [
                "kode_kelas" => "K01",
                "nama_kelas" => "VI A",
                "ruangan" => "R1"
            ],
            [
                "kode_kelas" => "K02",
                "nama_kelas" => "VI B",
                "ruangan" => "R2"
            ],
            [
                "kode_kelas" => "K03",
                "nama_kelas" => "VII A",
                "ruangan" => "R3"
            ],
            [
                "kode_kelas" => "K04",
                "nama_kelas" => "VII B",
                "ruangan" => "R4"
            ],
            [
                "kode_kelas" => "K05",
                "nama_kelas" => "VIII A",
                "ruangan" => "R5"
            ],
            [
                "kode_kelas" => "K06",
                "nama_kelas" => "VIII B",
                "ruangan" => "R6"
            ]
        ];
        return $kelas;
    }
}
