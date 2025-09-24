<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;
    protected $table = 'unit_kerja';

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }

    public function satuan_kerja()
    {
        return $this->hasMany(SatuanKerja::class);
    }
}
