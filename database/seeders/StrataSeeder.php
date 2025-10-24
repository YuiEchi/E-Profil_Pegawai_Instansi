<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StrataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('strata')->insert([
            'strata' => 'abcd',
            'jurusan' => 'efgh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
