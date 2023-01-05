<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajaran extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'kode_guru', 'kode_guru');
    }

    public function mapel()
    {
        return $this->hasMany(Mapel::class, 'kode_mapel', 'kode_mapel');
    }

    public function detaDummy()
    {
        return [
            [
                "kode_pengajar" => "P01",
                "kode_guru" => "G01",
                "kode_mapel" => "P8"
            ],
            [
                "kode_pengajar" => "P01",
                "kode_guru" => "G01",
                "kode_mapel" => "P20"
            ],
            [
                "kode_pengajar" => "P02",
                "kode_guru" => "G02",
                "kode_mapel" => "P14"
            ],
            [
                "kode_pengajar" => "P02",
                "kode_guru" => "G02",
                "kode_mapel" => "P15"
            ],
            [
                "kode_pengajar" => "P03",
                "kode_guru" => "G03",
                "kode_mapel" => "P21"
            ],
            [
                "kode_pengajar" => "P04",
                "kode_guru" => "G04",
                "kode_mapel" => "P24"
            ],
            [
                "kode_pengajar" => "P04",
                "kode_guru" => "G04",
                "kode_mapel" => "P5"
            ],
            [
                "kode_pengajar" => "P05",
                "kode_guru" => "G05",
                "kode_mapel" => "P3"
            ],
            [
                "kode_pengajar" => "P06",
                "kode_guru" => "G06",
                "kode_mapel" => "P13"
            ],
            [
                "kode_pengajar" => "P06",
                "kode_guru" => "G06",
                "kode_mapel" => "P19"
            ],
            [
                "kode_pengajar" => "P07",
                "kode_guru" => "G07",
                "kode_mapel" => "P11"
            ],
            [
                "kode_pengajar" => "P07",
                "kode_guru" => "G07",
                "kode_mapel" => "P22"
            ],
            [
                "kode_pengajar" => "P08",
                "kode_guru" => "G08",
                "kode_mapel" => "P2"
            ],
            [
                "kode_pengajar" => "P09",
                "kode_guru" => "G09",
                "kode_mapel" => "P12"
            ],
            [
                "kode_pengajar" => "P10",
                "kode_guru" => "G10",
                "kode_mapel" => "P10"
            ],
            [
                "kode_pengajar" => "P11",
                "kode_guru" => "G11",
                "kode_mapel" => "P1"
            ],
            [
                "kode_pengajar" => "P12",
                "kode_guru" => "G12",
                "kode_mapel" => "P4"
            ],
            [
                "kode_pengajar" => "P13",
                "kode_guru" => "G13",
                "kode_mapel" => "P6"
            ],
            [
                "kode_pengajar" => "P13",
                "kode_guru" => "G13",
                "kode_mapel" => "P19"
            ],
            [
                "kode_pengajar" => "P14",
                "kode_guru" => "G14",
                "kode_mapel" => "P21"
            ],
            [
                "kode_pengajar" => "P15",
                "kode_guru" => "G15",
                "kode_mapel" => "P16"
            ],
            [
                "kode_pengajar" => "P16",
                "kode_guru" => "G16",
                "kode_mapel" => "P7"
            ],
            [
                "kode_pengajar" => "P16",
                "kode_guru" => "G16",
                "kode_mapel" => "P9"
            ],
            [
                "kode_pengajar" => "P17",
                "kode_guru" => "G17",
                "kode_mapel" => "P2"
            ],
            [
                "kode_pengajar" => "P17",
                "kode_guru" => "G17",
                "kode_mapel" => "P9"
            ],
            [
                "kode_pengajar" => "P18",
                "kode_guru" => "G18",
                "kode_mapel" => "P23"
            ]
        ];
    }
}
