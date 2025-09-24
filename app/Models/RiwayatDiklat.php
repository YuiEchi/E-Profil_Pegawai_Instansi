<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatDiklat extends Model
{
    use HasFactory;
    protected $table = 'riwayat_diklat';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
    
}
