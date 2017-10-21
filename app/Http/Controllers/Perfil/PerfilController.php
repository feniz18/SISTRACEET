<?php

namespace App\Http\Controllers\Perfil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Libreria\FechaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    public function updateDatos(Request $request){

        $fecha = new FechaController;

        if(!$request->fecha_nacimiento == null){

          $request['fecha_nacimiento'] = $fecha->formatFechaIn($request->fecha_nacimiento);

        }
        $reglas = [

          'foto' => 'mimes:jpeg,png,gif|max:500',
          'fecha_nacimiento' => 'required|date|before:today',
          'nombres' => 'required|min:5|max:60',
          'apellidos' => 'required|min:5|max:60',
          'telefono' => 'required|min:5|max:18',
          'email' => 'required|email',
          'ciu' => 'required',
        ];


        $datos = $request->all();

        $valida = Validator::make($datos,$reglas);

        if($valida->fails()){
            return $valida->errors();
        }

        $usuario = Usuario::find(Auth::user()->cedula);

        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        $usuario->ciudad_id = $request->ciu;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;

        if(!$request->foto == null){

              $extension = $request->file('foto')
                                 ->getClientOriginalExtension();

              $request->file('foto')->storeAs('public',$usuario->cedula . '.' . $extension);

              $usuario->imagen = '.'. $extension;
        }

        $usuario->save();

        return response()->json(['terminado' => "Usuario actualizado correctamente"]);
    }

    public function updateContrasena(Request $request)
    {
      $datos = $request->all();

      $reglas = [

        'contrasenaOld' => 'required',
        'contrasena' => 'required|min:6',
        'rcontrasena' => 'required|same:contrasena|min:6',

      ];

      $validador = Validator::make($datos,$reglas);

      if($validador->fails()){

        return response()->json($validador->errors());

      }

      if(!Hash::check($request->contrasenaOld,Auth::user()->password)){

          return response()->json(['error' =>'La contraseña ingresada en el campo Contraseña Antigua no coincide con el de la base de datos']);

      }

      $usuario = Usuario::find(Auth::user()->cedula);

      $usuario->password = Hash::make($request->contrasena);

      $usuario->save();

      return response()->json(['final' => 'Correcto contraseña actualizada correctamente']);

    }
}
