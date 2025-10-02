<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cari pegawai pertama
        $pegawai = DB::table('pegawai')->first();

        // Buat Pegawai (kalau ada data pegawai)
        if ($pegawai) {
            User::create([
                'pegawai_id' => 6,
                'name' => 'Lionel Messi',
                'username' => 'Messi',
                'email' => 'Messi@gmail.com',
                'password' => Hash::make('password'),
                'role' => 6,
            ]);
        }
    }
}
