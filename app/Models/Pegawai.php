<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';

    public function user()
    {
        return $this->hasOne(User::class, 'pegawai_id');
    }

    public function riwayatSlks()
    {
        return $this->hasMany(RiwayatSlks::class);
    }

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }
    
    // public function unit_kerja()
    // {
    //     return $this->belongsTo(UnitKerja::class, 'unit_kerja_id');
    // }

       // relasi ke unit kerja lewat instansi
    public function unit_kerja()
    {
        return $this->hasManyThrough(
            UnitKerja::class,
            Instansi::class,
            'id',           // Foreign key di instansi
            'instansi_id',  // Foreign key di unit_kerja
            'instansi_id',  // Foreign key di pegawai
            'id'            // Local key di instansi
        );
    }

    public function satuan_kerja()
    {
        return $this->belongsTo(SatuanKerja::class, 'satuan_kerja_id');
    }

    public function riwayatJabatan()
    {
        return $this->hasMany(RiwayatJabatan::class);
    }

}
