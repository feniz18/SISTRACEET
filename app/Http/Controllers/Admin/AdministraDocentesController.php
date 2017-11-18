<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Departamento;
use App\Ciudad;
use App\Http\Controllers\Libreria\FechaController;
use Carbon\Carbon;

class AdministraDocentesController extends Controller
{

    public function index(){

      $usuario = Usuario::where('rol_id','docente')->orderBy('created_at','desc')->get();

      return view("admin.docente.administraDocentes")->with(['usuario'=>$usuario]);

    }

    public function cargaDatosEdicion($cedula)
    {

    	$persona = Usuario::find($cedula);

      if (!$persona->hora_inicio == null) {
        $hora_inicio = Carbon::createFromFormat('H:i:s',$persona->hora_inicio);
        $hora_fin = Carbon::createFromFormat('H:i:s',$persona->hora_fin);
          $formato = 'h:i A';
        $persona->hora_inicio = $hora_inicio->format($formato);
        $persona->hora_fin = $hora_fin->format($formato);
      }

      $fecha = new FechaController;
      $persona->fecha_nacimiento = (string)$fecha->formatFechaOut($persona->fecha_nacimiento);
    	return $persona;
    }
    public function cargaSemanaInstructor($cedula){

      $persona = Usuario::find($cedula);
      $semana =[];

      foreach ($persona->dia_semana as $dias)  {
        array_push($semana, $dias->pivot->dia_semana_id);
      }

      return response()->json($semana);

    ;

    }
}
