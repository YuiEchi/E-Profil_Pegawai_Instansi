<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        $strataId = DB::table('strata')->first()->id;
        DB::table('riwayat_pendidikan')->insert([
            'nm_sekolah_pt' => 'UBSI',
            'no_ijazah' => '12345',
            'thn_lulus' => '2020',
            'pimpinan' => 'John Doe',
            'kode_pendidikan' => '12345',
            'pegawai_id' => $pegawaiId,
            'strata_id' => $strataId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
