<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKeluarga extends Model
{
    use HasFactory;
    protected $table = 'data_keluarga';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
