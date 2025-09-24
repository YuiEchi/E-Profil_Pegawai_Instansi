<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Instansi extends Model
{
    use HasFactory;
    protected $table = 'instansi';

     // ambil 1 unit kerja paling baru (misal berdasarkan kolom 'created_at')
    public function latestUnitKerja(): HasOne
    {
        return $this->hasOne(UnitKerja::class, 'instansi_id')
                    ->latest('created_at'); // atau ganti dengan kolom tanggal yg tepat
    }
    
}
