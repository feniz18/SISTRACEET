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

Route::get('/', function () {
    return view('index');
});

Route::get('registro', [

  'uses'=>'RegistroController@index',
  'as'  =>'registro'
  ]
);
Route::post('login', function(){
  return View("inicio");

});
