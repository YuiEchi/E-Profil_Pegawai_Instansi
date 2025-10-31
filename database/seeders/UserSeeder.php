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

        // Buat Super Admin
        User::create([
<<<<<<< HEAD
            'name' => 'Super Admin',
=======
>>>>>>> upstream/Restu-ujicoba
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // ganti dengan password aman
            'role' => 1,
        ]);

        // Buat Pegawai (kalau ada data pegawai)
        if ($pegawai) {
            User::create([
                'pegawai_id' => $pegawai->id,
<<<<<<< HEAD
                'name' => 'Pegawai Contoh',
=======
>>>>>>> upstream/Restu-ujicoba
                'username' => 'pegawai1',
                'email' => 'pegawai1@example.com',
                'password' => Hash::make('password'),
                'role' => 6,
            ]);
        }
    }
}
