<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_jabatan')->insert([
            'jenis_jabatan' => 'Jabatan 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
