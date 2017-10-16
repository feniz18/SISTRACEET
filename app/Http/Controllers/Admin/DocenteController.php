<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Http\Controllers\Libreria\FechaController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;

class DocenteController extends Controller
{
    public function editar(Request $request){

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

          foreach ($usuarios as $usuario) {

            $usuariosArray[] = $usuario;

          }

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
}
