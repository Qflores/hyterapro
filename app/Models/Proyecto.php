<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'fecha_inicio',
        'fecha_fin',
        'cliente_id',
        'supplier_id',
        'jefe_id',
        'coordinador_id'
    ];

    public function proveedor()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Supplier::class, 'cliente_id');
    }

    public function coordinador()
    {
        return $this->belongsTo(User::class, 'coordinador_id');
    }

    public function jefe()
    {
        return $this->belongsTo(User::class, 'jefe_id');
    }

    /* public function componente()
    {
        return $this->hasMany(Component::class);
    }*/
}
