<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }
    
    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_id');
    }

    public function satuanKerja()
    {
        return $this->belongsTo(SatuanKerja::class, 'satuan_kerja_id');
    }

}
