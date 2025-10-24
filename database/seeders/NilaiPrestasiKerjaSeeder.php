<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiPrestasiKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        DB::table('nilai_prestasi_kerja')->insert([
            'tahun' => 2023,
            'skp' => 51.372,
            'nilai_perilaku_kerja' => 85.5,
            'nilai_prestasi_kerja' => 68.4366,
            'klasifikasi_nilai' => 'B',
            'pejabat_penilai' => 'Pejabat XYZ',
            'pegawai_id' => $pegawaiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
