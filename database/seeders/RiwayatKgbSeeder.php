<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatKgbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        DB::table('riwayat_kgb')->insert([
            'pejabat_penetap' => 'Pejabat ABC',
            'no_sk' => 'SK987654',
            'tgl_sk' => '2024-01-01',
            'tgl_tmt' => '2024-02-01',
            'jml_gaji' => 6000000.00,
            'ket' => 'Keterangan tambahan KGB',
            'pegawai_id' => $pegawaiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
