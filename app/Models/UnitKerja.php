<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    protected $table = 'unit_kerja';

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }

    public function satuanKerja()
    {
        return $this->hasMany(SatuanKerja::class);
    }
}
