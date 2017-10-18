<?php

namespace App\Http\Controllers\Perfil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Libreria\FechaController;

class PerfilController extends Controller
{
    public function updateDatos(Request $request){

    /*  $extencion = $request->file('foto')
                           ->getClientOriginalExtension();

        $request->file('foto')->storeAs('public','1013651642' . '.' . $extencion);

        return $request->file('foto')->getClientOriginalExtension();*/

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



    }
}
