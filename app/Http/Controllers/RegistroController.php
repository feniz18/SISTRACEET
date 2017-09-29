<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Usuario;
use App\Departamento;
use App\Ciudad;

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
        $datos = $request->all();
        $reglas = [
          'cedula' => 'required',
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

          return redirect()->back()
            ->withErrors($valida->errors())
            ->withInput($request->except('contrasena'));

        }


        $usuario = new Usuario;
        $usuario->cedula = $request->input('cedula');
        $usuario->nombres = $request->input('nombres');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->telefono = $request->input('telefono');
        $usuario->correo = $request->input('correo');
        $usuario->ciudad_id = $request->input('ciu');
        $usuario->password = Hash::make($request->input('contrasena'));
        $usuario->rol_id = 'docente';

        return dd($usuario);

    }
}
