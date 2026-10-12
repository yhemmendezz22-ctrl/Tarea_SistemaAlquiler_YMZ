<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;

class AlquilerController extends Controller
{
    public function index()
    {
        $alquilers = Alquiler::all();
        dd($alquilers);
    }

    public function relaciones()
    {
        $alquiler = Alquiler::find(1);

        dd(
            $alquiler->cliente,
            $alquiler->empleado,
            $alquiler->alquilerDetalles
        );
    }

    public function completo()
    {
        $alquilers = Alquiler::with([
            'cliente',
            'empleado',
            'alquilerDetalles.equipo'
        ])->get();

        dd($alquilers);
    }
}