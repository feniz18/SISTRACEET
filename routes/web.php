<?php

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

Route::get('/', function(){
      return view('inicio');
});

Route::group(['middleware' => 'guest'],function(){

    Route::get('sesion', function () {
        return view('login.index');
    })->name('login');

    Route::post('sesion', 'LoginController@aut');

    Route::get('registro', [

      'uses'=>'RegistroController@index',
      'as'  =>'registro',
      ]
    );

    Route::post('registro',[

      'uses' => 'RegistroController@agrega',
      'as'   => 'registro',
    ]);

    route::get('recupera','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    route::post('recupera','Auth\ForgotPasswordController@sendResetLinkEmail');
    route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reinicio');
    route::post('password/reset','Auth\ResetPasswordController@reset')->name('post.reset');


});

Route::group(['middleware' => 'auth'], function(){

  route::get('/logout','LoginController@logout');
  route::get('/perfil','PerfilController@index');
  route::post('/perfil/actualiza','Perfil\PerfilController@updateDatos');
  route::post('/perfil/actualiza/contrasena','Perfil\PerfilController@updateContrasena');

});

Route::group(['middleware' => ['admin','auth']],function(){

  route::post('/instructor/edit','Admin\DocenteController@editar');
  route::get('/instructor/eliminar/{cedula}','Admin\DocenteController@eliminarDocente');
  route::get('/instructor/activar/{cedula}','Admin\DocenteController@activarDocente');
  route::get('/instructor/edit/postEdit','Admin\DocenteController@postEditarDocente');
  route::get("/administraDocentes","Admin\AdministraDocentesController@index");
  route::get("/administraTransferencia","Admin\AdministraTransferenciasController@index");
  route::get("/logReporte","Reporte\LogController@index");
    route::get("/reportes/logs","Reporte\LogController@reporte");

});
