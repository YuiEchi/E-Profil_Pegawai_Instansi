<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }
    
    public function unit_kerja()
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_id');
    }

    public function satuan_kerja()
    {
        return $this->belongsTo(SatuanKerja::class, 'satuan_kerja_id');
    }

}
