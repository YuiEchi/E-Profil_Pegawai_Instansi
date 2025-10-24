<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unitKerjaId = DB::table('unit_kerja')->first()->id;
        DB::table('satuan_kerja')->insert([
            'nm_satuan_kerja' => 'efgh',
            'unit_kerja_id' => $unitKerjaId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
