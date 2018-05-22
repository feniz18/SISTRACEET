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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/combo/{id}/nombre','RegistroController@devuelveCombo');
Route::get('/admin/{cedula}','Admin\AdministraDocentesController@cargaDatosEdicion');

Route::get('/combo/departamento','Departamento\DepartamentoMunicipioController@departamento');
Route::get('/combo/ciudad/{departamento}','Departamento\DepartamentoMunicipioController@ciudad');
Route::get('/combo/ciudad/usuario/{cedula}','Departamento\DepartamentoMunicipioController@ciudadUsuario');
Route::get('/idioma/{lang?}',"Idioma\IdiomaController@idioma");
