<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Http\Controllers\Libreria\FechaController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DocenteController extends Controller
{
  protected $formato_hora_in='h:i A';
  protected $formato_hora_out='H:i:s';
    public function editar(Request $request){


      /*--------------------------------------*/

      $fecha_nacimiento = new FechaController();
      $request['fecha_nacimiento'] = $fecha_nacimiento->formatFechaIn($request->fecha_nacimiento);

      $datos = $request->all();

      $reglas = [
        'cedula' => 'required|max:12|min:3',
        'fecha_nacimiento' => 'required|date|before:today',
        'nombres' => 'required|min:5|max:60',
        'apellidos' => 'required|min:5|max:60',
        'telefono' => 'required|min:5|max:18',
        'correo' => 'required|email',
        'ciu' => 'required',
        'especialidad' => 'required',
      ];

      $validador = Validator::make($datos,$reglas);

      if($validador->fails()){


        return response()->json($validador->errors());

      }

      $usuario =  Usuario::find($request->cedulaIni);
      $usuario->cedula = $request->cedula;
      $usuario->fecha_nacimiento = $request->fecha_nacimiento;
      $usuario->nombres = $request->nombres;
      $usuario->apellidos = $request->apellidos;
      $usuario->telefono = $request->telefono;
      $usuario->email = $request->correo;
      $usuario->ciudad_id = $request->ciu;
      $usuario->especialidad_id= $request->especialidad;
      try {

      $usuario->save();

      } catch (Exception $e) {

          return response()->json(['error' => 'A ocurrido un error: ' + $e + ' Intente mas tarde']);
      }



      if($request->json()){

        return response()->json(['final' => 'Informacion actualizada correctamente']);

      }


    }

    public function postEditarDocente(){

          $usuarios = Usuario::where('rol_id','docente')->orderBy('created_at','desc')->get();

          return response()->json($usuarios);

    }

    public function activarDocente($cedula){

      $usuario = Usuario::find($cedula);

      if($usuario->activo){

          $usuario->activo = 0;
          $usuario->save();

      }else {

          $usuario->activo = 1;
          $usuario->save();

      }

      return response()->json($usuario->activo);

    }

    public function eliminarDocente($cedula){

      $usuario = Usuario::find($cedula);

      if(is_null($usuario)){

        return response()->json(false);
      }
        $usuario->delete();
        return response()->json(true);


    }

    public function guardarHorario(Request $request)
    {
      return $this->validacionesPersonalizadas($request);


    }
    public function validacionesPersonalizadas($request)
    {
      $hora_inicio = Carbon::createFromFormat($this->formato_hora_in,$request->hora_inicio);
      $hora_fin = Carbon::createFromFormat($this->formato_hora_in,$request->hora_fin);

      $respuesta =[];

      if($hora_inicio==$hora_fin)
      {
        $respuesta = ['error'
        =>
        'La hora inicial no puede ser igual a la fecha final',
        ];
        return $respuesta;
      }
      else if($hora_inicio>$hora_fin)
      {
        $hora_fin->addDay();
        $dia_semana =
        DB::table('usuario')
            ->join('usuario_semana',
            function($join) use($request)
            {
              $join->on
              (
                'usuario.cedula','=','usuario_semana.cedula_id'
              )
              ->where(
                'usuario_semana.dia_semana_id','=',$request->dia
              );
            })->get();
      }


      for ($i=0; $i < count($dia_semana) ; $i++) {
        $hora_inicio_BD =  Carbon::createFromFormat($this->formato_hora_in,$dia_semana[i]->hora_inicio);
        $hora_fin_BD =  Carbon::createFromFormat($this->formato_hora_in,$dia_semana[i]->hora_fin);
        if($hora_inicio_BD>$hora_fin_BD)
        {
          $hora_fin_BD->addDay();
        }
      }

    }
}
