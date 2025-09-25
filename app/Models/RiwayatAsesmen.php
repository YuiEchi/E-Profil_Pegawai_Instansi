<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatAsesmen extends Model
{
    use HasFactory;
    protected $table = 'riwayat_asesmen';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
