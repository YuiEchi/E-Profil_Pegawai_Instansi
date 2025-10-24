<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatOrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        DB::table('riwayat_organisasi')->insert([
            'organisasi' => 'Organisasi ABC',
            'jabatan' => 'Ketua',
            'masa_jabatan' => '2021-2023',
            'no_sk' => 'ORG123456',
            'tgl_sk' => '2021-02-01',
            'pejabat_penetap' => 'Pejabat XYZ',
            'pegawai_id' => $pegawaiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
