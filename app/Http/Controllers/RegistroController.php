<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Usuario;
use App\Departamento;
use App\Ciudad;
use DateTime;

class RegistroController extends Controller
{
    public function devuelveCombo($id){
      $ciudad = new Ciudad;
      return $ciudad->combo($id);

    }
    public function index()
    {
        $departamentos = Departamento::all();


        return view("registro",['departamentos' => $departamentos]);
    }

    public function agrega(Request $request)
    {
        $fecha = DateTime::createFromFormat('d/m/Y', $request->input('fecha_nacimiento'));
        $request['fecha_nacimiento'] = $fecha->format('Y-m-d');



        $datos = $request->all();
        $reglas = [
          'cedula' => 'required',
          'fecha_nacimiento' => 'required|date|before:today',
          'nombres' => 'required',
          'apellidos' => 'required',
          'telefono' => '',
          'correo' => 'required',
          'ciu' => 'required',
          'contrasena' => 'required',
          'rcontrasena' => 'required',

        ];

        $valida = Validator::make( $datos, $reglas);

        if($valida->fails()){

            $request['fecha_nacimiento'] = $fecha->format('d/m/Y');

          return redirect()->back()
            ->withErrors($valida->errors())
            ->withInput($request->all());

        }


        $usuario = new Usuario;
        $usuario->cedula = $datos->input('cedula');
        $usuario->nombres = $datos->input('nombres');
        $usuario->apellidos = $datos->input('apellidos');
        $usuario->telefono = $datos->input('telefono');
        $usuario->correo = $datos->input('correo');
        $usuario->ciudad_id = $datos->input('ciu');
        $usuario->password = Hash::make($datos->input('contrasena'));
        $usuario->rol_id = 'docente';

        return dd($usuario);

    }
}
