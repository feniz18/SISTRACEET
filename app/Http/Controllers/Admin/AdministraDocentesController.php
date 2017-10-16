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

      $usuario = Usuario::where('rol_id','docente')->orderBy('created_at','desc')->get();

      return view("admin.docente.administraDocentes")->with(['usuario'=>$usuario]);

    }

    public function cargaDatosEdicion($cedula)
    {

    	$persona = Usuario::find($cedula);

      $fecha = new FechaController;
      $persona->fecha_nacimiento = (string)$fecha->formatFechaOut($persona->fecha_nacimiento);
    	return $persona;
    }
}
