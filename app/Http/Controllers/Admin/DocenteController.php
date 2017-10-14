<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Http\Controllers\Libreria\FechaController;
use Illuminate\Support\Facades\Validator;

class DocenteController extends Controller
{
    public function editar(Request $request){

      $datos = $request->all();

      $reglas = [
        'cedula' => 'required|max:12|min:3',
        'fecha_nacimiento' => 'required|date|before:today',
        'nombres' => 'required|min:5|max:60',
        'apellidos' => 'required|min:5|max:60',
        'telefono' => 'required|min:5|max:18',
        'correo' => 'required|unique:usuario,email|email',
        'ciu' => 'required',

      ];

      $validador = Validator::make($datos,$reglas);

      if($validador->fails()){


        return $validador->errors();

      }

      $usuario =  Usuario::find($request->cedulaIni);
      $usuario->cedula = $request->cedula;

      $fecha_nacimiento = new FechaController();

      $usuario->fecha_nacimiento = $fecha_nacimiento->formatFechaIn($request->fecha_nacimiento);
      $usuario->nombres = $request->nombres;
      $usuario->apellidos = $request->apellidos;
      $usuario->telefono = $request->telefono;
      $usuario->email = $request->correo;
      $usuario->ciudad_id = $request->ciu;

      //$usuario->save();


      if($request->json()){

        return $usuario;

      }


    }
}
