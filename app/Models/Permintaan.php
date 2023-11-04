<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_unit',
        'tanggal',
        'id_darah',
        'jumlah',
        'status',
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'id_unit', 'id');
    }

    public function darah()
    {
        return $this->belongsTo(Darah::class, 'id_darah', 'id');
    }
}
