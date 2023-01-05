<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = ["id"];


    public function mengajar()
    {
        return $this->hasMany(Pengajaran::class, 'kode_guru', 'kode_guru');
    }

    public function dataDummy()
    {
        $guru = [
            [
                "guru" => "Ahmad Fauzi S.Ag",
                "kode_guru" => "G01"
            ],
            [
                "guru" => "Abdul Aziz QH.SS",
                "kode_guru" => "G02"
            ],
            [
                "guru" => "Muhammad Arrayan S.Kom",
                "kode_guru" => "G03"
            ],
            [
                "guru" => "Ana Ulfia Hidayati S.Pd",
                "kode_guru" => "G04"
            ],
            [
                "guru" => "M. Alawi hamdani QH., S.Pd",
                "kode_guru" => "G05"
            ],
            [
                "guru" => "M. Syamsul Huda S.Ag",
                "kode_guru" => "G06"
            ],
            [
                "guru" => "TGH. Qamaruddin QH., S.Ag",
                "kode_guru" => "G07"
            ],
            [
                "guru" => "Muhammad Azmi S.Pd",
                "kode_guru" => "G08"
            ],
            [
                "guru" => "M. Zulfan Azhari S.Pd",
                "kode_guru" => "G09"
            ],
            [
                "guru" => "Taufiqqurrahman S.Pd",
                "kode_guru" => "G10"
            ],
            [
                "guru" => "Siti Humaira S.Pd",
                "kode_guru" => "G11"
            ],
            [
                "guru" => "Nurhasanah S.Pd",
                "kode_guru" => "G12"
            ],
            [
                "guru" => "Lilis Ayudia Arsianti S.Sos",
                "kode_guru" => "G13"
            ],
            [
                "guru" => "Herman S.Kom",
                "kode_guru" => "G14"
            ],
            [
                "guru" => "Amrullah S.Pd",
                "kode_guru" => "G15"
            ],
            [
                "guru" => "Nurhidayanti S.Pd",
                "kode_guru" => "G16"
            ],
            [
                "guru" => "Yeni Hariwianti S.Pd",
                "kode_guru" => "G17"
            ],
            [
                "guru" => "Muhammad Bahjan QH., S.Ag",
                "kode_guru" => "G18"
            ]
        ];
        return $guru;
    }
}
