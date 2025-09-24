<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatGolongan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_golongan';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function golongan()
    {
        return $this->belongsTo(Golongan::class);
    }
}
