<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'telefono',
        'correo',
        'cargo'
    ];

    public function alquilers()
    {
        return $this->hasMany(Alquiler::class);
    }
}
