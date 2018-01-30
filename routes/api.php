<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/listar_rutas', 			'API\ConductorController@listar_rutas');
Route::post('/listar_conductores', 		'API\ConductorController@listar_conductores');

Route::post('/crear_ruta', 			'API\ConductorController@aceptar_viaje');
Route::post('/crear_conductor', 	'API\ConductorController@registrar_conductor');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
