<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = ["mapel", "kode_mapel"];

    public function dataDummy()
    {
        $mk = [
            [
                "mapel" => "Matematika",
                "kode_mapel" => "P1"
            ],
            [
                "mapel" => "Bahasa indonesia",
                "kode_mapel" => "P2"
            ],
            [
                "mapel" => "Bahasa inggris",
                "kode_mapel" => "P3"
            ],
            [
                "mapel" => "Kimia",
                "kode_mapel" => "P4"
            ],
            [
                "mapel" => "Fisika",
                "kode_mapel" => "P5"
            ],
            [
                "mapel" => "Biologi",
                "kode_mapel" => "P6"
            ],
            [
                "mapel" => "Geografi",
                "kode_mapel" => "P7"
            ],
            [
                "mapel" => "Ekonomi",
                "kode_mapel" => "P8"
            ],
            [
                "mapel" => "Sosiologi",
                "kode_mapel" => "P9"
            ],
            [
                "mapel" => "Akidah akhlak",
                "kode_mapel" => "P10"
            ],
            [
                "mapel" => "Qur’an Hadist",
                "kode_mapel" => "P11"
            ],
            [
                "mapel" => "Sejarah Islam",
                "kode_mapel" => "P12"
            ],
            [
                "mapel" => "Bahasa Arab",
                "kode_mapel" => "P13"
            ],
            [
                "mapel" => "Fiqih",
                "kode_mapel" => "P14"
            ],
            [
                "mapel" => "K-NW-an",
                "kode_mapel" => "P15"
            ],
            [
                "mapel" => "Penjaskes ",
                "kode_mapel" => "P16"
            ],
            [
                "mapel" => "Kesenian",
                "kode_mapel" => "P17"
            ],
            [
                "mapel" => "Sejarah Indonesia",
                "kode_mapel" => "P18"
            ],
            [
                "mapel" => "PPKN",
                "kode_mapel" => "P19"
            ],
            [
                "mapel" => "Mulok",
                "kode_mapel" => "P20"
            ],
            [
                "mapel" => "TIK (Komputer)",
                "kode_mapel" => "P21"
            ],
            [
                "mapel" => "Ta’limul Muta’allim",
                "kode_mapel" => "P22"
            ],
            [
                "mapel" => "Nahwu",
                "kode_mapel" => "P23"
            ],
            [
                "mapel" => "Prakarya",
                "kode_mapel" => "P24"
            ]
        ];
        return $mk;
    }
}
