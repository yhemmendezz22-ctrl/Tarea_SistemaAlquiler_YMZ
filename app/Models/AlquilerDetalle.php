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

    public function alquiler()
    {
        return $this->belongsTo(Alquiler::class);
    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
