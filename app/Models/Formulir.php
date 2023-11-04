<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal',
        'id_darah',
        'penyakit',
        'nohp',
        'id_jadwal',
        'status',
    ];

    public function darah()
    {
        return $this->belongsTo(Darah::class, 'id_darah', 'id');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal', 'id');
    }

}
