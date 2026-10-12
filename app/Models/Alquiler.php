<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alquiler extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'empleado_id',
        'fecha_solicitud',
        'fecha_inicio',
        'fecha_fin',
        'estado'
    ];

    public function clientes()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleados()
    {
        return $this-belongsTo(Empleado::class);
    }

    public function alquiler_detalles()
    {
        return $this-hasMany(AlquilerDetalle::class);
    }
}
