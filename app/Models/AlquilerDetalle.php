<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlquilerDetalle extends Model
{
    use HasFactory;

    protected $fillable = [
        'alquiler_id',
        'equipo_id',
        'cantidad'
    ];

    public function alquilers()
    {
        return $this->belongsTo(Alquiler::class);
    }

    public function equipos()
    {
        return $this->belongsTo(Equipo::class);
    }
}
