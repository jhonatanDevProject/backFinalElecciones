<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleccionesController;
use App\Http\Controllers\AdministradorController;

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

Route::get('/',function(){
    return "holamundo";
});

//Route::get('/verificarAdministrador',[App\Http\Controllers\AdministradorController::class,"index"]);
Route::get('/verificarAdministradorall', [AdministradorController::class,'index']);

Route::get('verificarAdministrador/{name}', [AdministradorController::class, 'verificarAdministrador']);

Route::get('/obtenerProcesosElectorales',[App\Http\Controllers\ProcesoElectoralController::class,"obtenerProcesosElectorales"]);

Route::post('/crearProcesoElectoral',[App\Http\Controllers\ProcesoElectoralController::class,"agregarProcesoElectoral"]);


Route::post('/asignar-vocales/{COD_COMITE}', [App\Http\Controllers\PoblacionController::class, 'asignarVocales']);

Route::get('/elecciones', [App\Http\Controllers\EleccionController::class, 'index']);

Route::put('/asignar-comite/{COD_ELECCION}', [App\Http\Controllers\ComiteElectoralController::class, 'asignarComite']);


Route::get('/ver-lista-comite/{idComite}', [App\Http\Controllers\AsociarTitularSuplenteController::class, 'verListaComite']);

//veidicar exit
Route::get('/verificar-comite/{codComite}', [App\Http\Controllers\AsociarTitularSuplenteController::class, 'verificarExistenciaComite']);

//Route::get('/elecciones_data', [EleccionesController::class, 'index']);

Route::post('/elecciones_data', [EleccionesController::class, 'store']);
