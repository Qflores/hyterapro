<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;

    public function partida()
    {
        return $this->belongsTo(Partida::class, 'partida_id');
    }
}
