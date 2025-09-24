<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pendidikan';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function strata()
    {
        return $this->belongsTo(Strata::class, 'strata_id');
    }
}
