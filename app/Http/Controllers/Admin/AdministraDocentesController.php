<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Departamento;
use App\Ciudad;
use App\Http\Controllers\Libreria\FechaController;
use Carbon\Carbon;
use App\Especialidad;
use App\Dia_semana;
use App\UsuarioSemana;

class AdministraDocentesController extends Controller
{

    public function index(){

      $usuario = Usuario::where('rol_id','docente')->orderBy('created_at','desc')->get();
      $especialidad = Especialidad::all()->sortBy('nombre');

      return view("admin.docente.administraDocentes")->with(['usuario'=>$usuario,'especialidad'=>$especialidad]);

    }
    public function indexHorario($id)
    {
      $usuario = Usuario::find($id);
      $semana = Dia_semana::all();


      return view('admin.docente.horario.horarioDocentes')->with(['usuario' => $usuario,'semana' =>$semana]);
    }

    public function cargaDatosEdicion($cedula)
    {

    	$persona = Usuario::find($cedula);

      $fecha = new FechaController;
      $persona->fecha_nacimiento = (string)$fecha->formatFechaOut($persona->fecha_nacimiento);
    	return $persona;
    }
    public function eliminaDatosHorario($id)
    {
      $usuario_semana = UsuarioSemana::find($id);
      $cedula = $usuario_semana->cedula_id;

      $usuario_semana->delete();

      return response()->json(['final' => 'Horario eliminado correctamente','cedula' => $cedula]);
    }
}
