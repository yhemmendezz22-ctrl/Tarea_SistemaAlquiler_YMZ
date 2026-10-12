<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        dd($clientes);
    }

    public function alquilers()
    {
        $cliente = Cliente::find(1);
        $alquilers = $cliente->alquilers;
        dd($alquilers);
    }
}