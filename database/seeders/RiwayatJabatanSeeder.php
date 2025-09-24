<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        $eselonId = DB::table('eselon')->first()->id;
        $jenisjabatanId = DB::table('jenis_jabatan')->first()->id;
        DB::table('riwayat_jabatan')->insert([
            'jabatan' => 'Manajer',
            'tmt' => '2023-01-01',
            'no_sk' => 'SK123',
            'tgl_sk' => '2023-01-01',
            'pejabat_penetap' => 'Direktur',
            'jenis_mutasi' => 1,
            'pegawai_id' => $pegawaiId,
            'eselon_id' => $eselonId,
            'jenis_jabatan_id' => $jenisjabatanId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
