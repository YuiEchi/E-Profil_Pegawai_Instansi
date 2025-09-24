<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanKerja extends Model
{
    protected $table = 'satuan_kerja';
    
    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class);
    }

}
