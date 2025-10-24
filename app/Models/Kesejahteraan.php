<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesejahteraan extends Model
{
    use HasFactory;
    protected $table = 'kesejahteraan';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
