<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('instansi')->insert([
            'nm_instansi' => 'abcd',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
