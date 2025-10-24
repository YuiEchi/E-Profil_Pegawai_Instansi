<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatJabatan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_jabatan';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function eselon()
    {
        return $this->belongsTo(Eselon::class, 'eselon_id');
    }

    public function jenis_jabatan()
    {
        return $this->belongsTo(JenisJabatan::class, 'jenis_jabatan_id');
    }

}
