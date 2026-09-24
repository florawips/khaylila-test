<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'hari',
        'jam_ke',
        'mapel_guru_id',
    ];
    public function mapelGuru()
    {
        return $this->belongsTo(MapelGuru::class);
    }
}
