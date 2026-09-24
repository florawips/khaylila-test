<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = [
        'siswa_id',
        'nama_kegiatan',
        'deskripsi',
    ];
    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
