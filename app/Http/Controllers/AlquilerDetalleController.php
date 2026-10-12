<?php

namespace App\Http\Controllers;

use App\Models\AlquilerDetalle;

class AlquilerDetalleController extends Controller
{
    public function index()
    {
        $detalles = AlquilerDetalle::all();
        dd($detalles);
    }

    public function relaciones()
    {
        $detalle = AlquilerDetalle::find(1);

        dd(
            $detalle->alquiler,
            $detalle->equipo
        );
    }
}