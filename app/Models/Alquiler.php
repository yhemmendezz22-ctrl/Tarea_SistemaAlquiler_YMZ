<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Databse\Eloquent\Relations\BelongsTo;
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

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function alquilerDetalles()
    {
        return $this->hasMany(AlquilerDetalle::class);
    }
}
