<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiId = DB::table('pegawai')->first()->id;
        DB::table('data_keluarga')->insert([
            'nama' => 'Budi',
            'nik' => 5112345678372,
            'tmpt_lahir' => 'London',
            'tgl_lahir' => '2012-12-12',
            'jenis_kelamin' => 'Laki-laki',
            'status_keluarga' => 'Anak',
            'pendidikan' => 'SMP',
            'pekerjaan' => 'Pelajar',
            'nip' => '',
            'pegawai_id' => $pegawaiId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
