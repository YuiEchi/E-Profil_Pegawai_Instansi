<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatSlks extends Model
{
    use HasFactory;
    protected $table = 'riwayat_slk';
    
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
