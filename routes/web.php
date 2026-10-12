<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\AlquilerDetalleController;

Route::get('/', function () {
    return view('welcome');
});

// Categorias
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/equipos', [CategoriaController::class, 'equipos']);
Route::get('/categorias/con-equipos', [CategoriaController::class, 'conEquipos']);

// Equipos
Route::get('/equipos', [EquipoController::class, 'index']);
Route::get('/equipos/categoria', [EquipoController::class, 'categoria']);
Route::get('/equipos/con-categoria', [EquipoController::class, 'conCategoria']);

// Clientes
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/alquileres', [ClienteController::class, 'alquilers']);

// Empleados
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/alquileres', [EmpleadoController::class, 'alquilers']);

// Alquiler
Route::get('/alquileres', [AlquilerController::class, 'index']);
Route::get('/alquileres/relaciones', [AlquilerController::class, 'relaciones']);
Route::get('/alquileres/completo', [AlquilerController::class, 'completo']);

// AlquilerDetalle
Route::get('/detalles', [AlquilerDetalleController::class, 'index']);
Route::get('/detalles/relaciones', [AlquilerDetalleController::class, 'relaciones']);
