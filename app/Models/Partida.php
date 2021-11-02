<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    public function egresos()
    {
        return $this->hasMany(Egreso::class);
    }

    public function costos()
    {
        return $this->hasMany(Costo::class);
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'unidad_id');
    }

    public function componente()
    {
        return $this->belongsTo(Component::class, 'component_id');
    }
}
