<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = [
        'nama_mapel',
        'jumlah_jam',
    ];
    public function guru()
{
    return $this->belongsToMany(Mapel::class, 'guru_gurus');
}
}