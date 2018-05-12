<?php


// rutas adicionales


Route::get('/calculadora', 'CalculadoraController@index');
route::get("/reporte/inicioCarnet","Reporte\CarnetController@index");

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

Route::get('/','InicioController@index');
Route::get('/noticia/ver/{id}','InicioController@noticia');
Route::get('/integrantes','Integrantes\IntegrantesController@index');

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
  route::get("/logReporte","Reporte\LogController@index");
    route::post("/reportes/logs","Reporte\LogController@reporte");
    route::get("/reportes/logs/{fecha_inicio}/{fecha_fin}","Reporte\LogController@descargaReporte");
  //rutas horario de instructor

  route::get('/instructor/horario/{id}','Admin\AdministraDocentesController@indexHorario');
  route::post('/instructor/horario/guardar','Admin\DocenteController@guardarHorario');
  route::get('/instructor/horario/elimina/{id}','Admin\AdministraDocentesController@eliminaDatosHorario');

  //ruta de Sedes

  route::get("/sedes","Sede\SedeController@index");
  route::post("/sedes/guardar", 'Sede\SedeController@agregarSede');
  route::get("/sedes/{id}", 'Sede\SedeController@cargaDatosSede');
  route::post("/sedes/actualiza/{id}", 'Sede\SedeController@actualizaSede');
  route::get("/sedes/eliminar/{id}", 'Sede\SedeController@eliminar');

  //ruta transferencias transferencia/guardar
  route::get("/administraTransferencia","Admin\AdministraTransferenciasController@index");
  route::post("/transferencia/guardar/{id?}","Admin\AdministraTransferenciasController@guardar");
  route::get("/transferencias/cargamodal/{id}","Admin\AdministraTransferenciasController@cargaTransferenciaModal");
  route::get("/transferencias/eliminar/{id}","Admin\AdministraTransferenciasController@eliminar");

  //ruta horario transferencia
    route::get('/transferencia/horario/{id}','Transferencia\HorarioTransferenciaController@index');
    route::post('/transferencia/horario/guardar','Transferencia\HorarioTransferenciaController@guardarHorario');
    route::get('/transferencia/horario/elimina/{id}','Transferencia\HorarioTransferenciaController@eliminarHorario');
  //registro transferencias

  route::get('/transferencia/registro/cargamodal/{id}','Transferencia\InscripcionTransferencia@cargaDatosModalUsuario');
  route::post('/transferencia/registro','Transferencia\InscripcionTransferencia@registrarTransferencia');
  route::get('/transferencia/correo/enviar/{id}','Transferencia\InscripcionTransferencia@enviarCorreo');


  //rutas noticias
  route::get("/administraNoticias","Noticia\NoticiaController@index");
  route::get("/crearNoticias","Noticia\NoticiaController@indexCrear");
  route::post("/guardar/noticias","Noticia\NoticiaController@guardarNoticias");
  route::get("/guardar/noticias/activar/{id}","Noticia\NoticiaController@activar");
  route::get("/guardar/noticias/eliminar/{id}","Noticia\NoticiaController@eliminar");

  //ruta de Reportes

  route::get("/reporte/usuarios","Reporte\ReporteUsuarioController@index");
  route::get("/reporte/usuarios/gen","Reporte\ReporteUsuarioController@generarReporte");
  route::get("/reporte/usuarios/gen/pos/{fecha_inicio}/{fecha_fin}","Reporte\ReporteUsuarioController@generarReportePost");

  //reporte carnet
  
  



});

Route::group(['middleware' => ['instructor','auth']],function()
{
  route::get("/verCursos",'Instructor\InstructorController@index');
});
