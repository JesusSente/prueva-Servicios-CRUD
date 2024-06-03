<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('clientes', App\Http\Controllers\ClienteController::class);

Route::resource('servicios', App\Http\Controllers\ServicioController::class);

Route::resource('equipos', App\Http\Controllers\EquipoController::class);

Route::resource('marcas', App\Http\Controllers\MarcaController::class);

Route::resource('tipoEquipos', App\Http\Controllers\TipoEquipoController::class);

Route::resource('tecnicos', App\Http\Controllers\TecnicoController::class);

Route::resource('estados', App\Http\Controllers\EstadoController::class);

Route::resource('informeServicios', App\Http\Controllers\InformeServicioController::class);

Route::resource('tipoServicios', App\Http\Controllers\TipoServicioController::class);
