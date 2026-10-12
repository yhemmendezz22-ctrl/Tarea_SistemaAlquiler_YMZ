<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'codigo',
        'nombre',
        'descripcion',
        'marca',
        'precio_dia',
        'estado'
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function alquiler_detalles()
    {
        return $this->hasMany(AlquilerDetalle::class);
    }
}
