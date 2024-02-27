<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\AerolineaController;
use App\Http\Controllers\VueloAsientosController;
use App\Http\Controllers\VuelosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AerolineaController::class,'inicio'])->name('aerolinea.inicio');

Route::get('/tipos-de-asiento', [TipoAsientoController::class, 'tiposAsiento'])->name('aerolinea.tiposAsiento');
Route::get('/vuelos', [VuelosController::class, 'vuelos'])->name('aerolinea.vuelos');
