<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanKerja extends Model
{
    use HasFactory;
    protected $table = 'satuan_kerja';
    
    public function unit_kerja()
    {
        return $this->belongsTo(UnitKerja::class);
    }

     // ambil 1 satuan kerja terbaru
    public function latestSatuanKerja()
    {
        return $this->hasOne(SatuanKerja::class, 'unit_kerja_id')
                    ->latest('created_at'); // atau latest('id') sesuai kolom
    }
}
