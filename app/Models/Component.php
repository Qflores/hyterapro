<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    //retornamos la cantidad de partidas que tiene un componente
    protected $withCount = ['partidas'];

    //retorna un promedio del avance del proyecto
    /*public function getPromedioAttribute()
    {
        //round(,0) redondea a un numero entero (,0) cantidad de decimales
        return round($this->partidas->avg('rating'));
    }*/

    public function proyesto()
    {
        return $this->belongsTo(Proyecto::class, 'proyect_id');
    }

    public function partidas()
    {
        return $this->hasMany(Partida::class);
    }
}
