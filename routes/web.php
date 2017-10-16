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

Route::get('sesion', function () {
    return view('login.index');
});

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

Route::get('/', function(){
      return view('inicio');
});

route::get('logout','LoginController@logout');
route::get('recupera','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
route::post('recupera','Auth\ForgotPasswordController@sendResetLinkEmail');
route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reinicio');
route::post('password/reset','Auth\ResetPasswordController@reset')->name('post.reset');
route::group(['middleware' => 'auth'], function () {

	route::get("administraDocentes","Admin\AdministraDocentesController@index");

});

route::post('/instructor/edit','Admin\DocenteController@editar');
route::get('/instructor/eliminar/{cedula}','Admin\DocenteController@eliminarDocente');
route::get('/instructor/activar/{cedula}','Admin\DocenteController@activarDocente');
route::get('/instructor/edit/postEdit','Admin\DocenteController@postEditarDocente');
