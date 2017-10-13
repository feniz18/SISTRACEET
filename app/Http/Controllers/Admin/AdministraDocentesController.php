<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Departamento;
use App\Ciudad;
use App\Http\Controllers\Libreria\FechaController;

class AdministraDocentesController extends Controller
{

    public function index(){

      $usuario = Usuario::all()->sortByDesc('created_at');
      $departamento = Departamento::all();
      $ciudad = Ciudad::all();

      return view("admin.docente.administraDocentes")->with(['usuario'=>$usuario,'departamento'=>$departamento,'ciudad'=>$ciudad]);

    }

    public function cargaDatosEdicion($cedula)
    {

    	$persona = Usuario::find($cedula);

      $fecha = new FechaController;
      $persona->fecha_nacimiento = (string)$fecha->formatFechaOut($persona->fecha_nacimiento);
    	return $persona;



    }
}
