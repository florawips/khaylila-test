<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MapelGuru extends Model
{
     protected $fillable = [ 
        'mapel_id',
        'guru_id',
     ];

     public function jadwal()
     {
        return $this->hasMany(Jadwal::class);
     }
     public function mapel()
     {
        return $this->belongsTo(Mapel::class);
     }
     public function guru()
     {
        return $this->belongsTo(Guru::class);
     }
}
