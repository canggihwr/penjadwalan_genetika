<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaktuPelajaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function dataDummy()
    {
        return [
            [
                "jam_pelajaran" => "JAM 1",
                "waktu_mulai" => "07:30",
                "waktu_selesai" => "8:10"
            ],
            [
                "jam_pelajaran" => "JAM 2",
                "waktu_mulai" => "08:10",
                "waktu_selesai" => "8:50"
            ],
            [
                "jam_pelajaran" => "JAM 3",
                "waktu_mulai" => "08:50",
                "waktu_selesai" => "9:30"
            ],
            [
                "jam_pelajaran" => "JAM 4",
                "waktu_mulai" => "09:30",
                "waktu_selesai" => "10:10"
            ],
            [
                "jam_pelajaran" => "JAM 5",
                "waktu_mulai" => "10:30",
                "waktu_selesai" => "11:10"
            ],
            [
                "jam_pelajaran" => "JAM 6",
                "waktu_mulai" => "11:10",
                "waktu_selesai" => "11:50"
            ],
            [
                "jam_pelajaran" => "JAM 7",
                "waktu_mulai" => "11:50",
                "waktu_selesai" => "12:30"
            ],
            [
                "jam_pelajaran" => "JAM 8",
                "waktu_mulai" => "12:30",
                "waktu_selesai" => "13:10"
            ]
        ];
    }
}
