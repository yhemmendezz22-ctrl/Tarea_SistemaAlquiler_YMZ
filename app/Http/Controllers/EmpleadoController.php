<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        dd($empleados);
    }

    public function alquilers()
    {
        $empleado = Empleado::find(2);
        $alquilers = $empleado->alquilers;
        dd($alquilers);
    }
}