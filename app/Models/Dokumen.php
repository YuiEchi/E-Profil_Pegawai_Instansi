<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'dokumen';


    public function folder() 
    {
        return $this->belongsTo(Folder::class);
    }

    public function pegawai() 
    {
        return $this->belongsTo(Pegawai::class);
    }
}
