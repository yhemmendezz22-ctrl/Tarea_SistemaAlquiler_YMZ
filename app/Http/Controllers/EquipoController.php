<?php

namespace App\Http\Controllers;

use App\Models\Equipo;

class EquipoController extends Controller
{

    public function index()
    {
        $equipos = Equipo::all();
        dd($equipos);
    }

    public function categoria()
    {
        $equipo = Equipo::find(1);
        $categoria = $equipo->categoria;
        dd($categoria);
    }

    public function conCategoria()
    {
        $equipos = Equipo::with('categoria')->get();
        dd($equipos);
    }
}