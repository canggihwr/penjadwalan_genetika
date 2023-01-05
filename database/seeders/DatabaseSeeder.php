<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Pengajaran;
use App\Models\WaktuPelajaran;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $mapel = new Mapel();
        $guru = new Guru();
        $kelas = new Kelas();
        $waktuPelajaran = new WaktuPelajaran();
        $pengajaran = new Pengajaran();

        // insert to DB
        Mapel::insert($mapel->dataDummy());
        Guru::insert($guru->dataDummy());
        Kelas::insert($kelas->dataDummy());
        WaktuPelajaran::insert($waktuPelajaran->dataDummy());
        Pengajaran::insert($pengajaran->detaDummy());
    }
}
