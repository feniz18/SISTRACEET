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

        //Convierte la fecha a hora de sistema dependiendo el formato que le indique de entrada
        $fecha = DateTime::createFromFormat('d/m/Y', $request->input('fecha_nacimiento'));
        $request['fecha_nacimiento'] = $fecha->format('Y-m-d');

        //almacena el request en variable datos para validarlos
        $datos = $request->all();
        $reglas = [
          'cedula' => 'required|unique:usuario,cedula|max:12|min:3',
          'fecha_nacimiento' => 'required|date|before:today',
          'nombres' => 'required|min:5|max:60',
          'apellidos' => 'required|min:5|max:60',
          'telefono' => 'required|min:5|max:18',
          'correo' => 'required|unique:usuario,correo|email',
          'ciu' => 'required',
          'contrasena' => 'required',
          'rcontrasena' => 'required',

        ];
        $validaciones = [
          'fecha_nacimiento.before' => 'El campo Fecha de nacimiento debe ser inferior a hoy',

        ];
        //crea validaciones que se editan en el lang
        $valida = Validator($datos, $reglas,$validaciones);

        if($valida->fails()){

            $request['fecha_nacimiento'] = $fecha->format('d/m/Y');

          return redirect()->back()
            ->withErrors($valida->errors())
            ->withInput($request->all());

        }

        if (!($request->input("contrasena") == $request->input("rcontrasena"))) {

          return redirect()->back()
            ->withErrors(["error" => "La contraseña escrita en contraseña y repetir contraseña no coinciden revise"])
            ->withInput($request->all());

        }


        $usuario = new Usuario;
        $usuario->cedula = $request->input('cedula');
        $usuario->fecha_nacimiento = $request->input('fecha_nacimiento');
        $usuario->nombres = $request->input('nombres');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->telefono = $request->input('telefono');
        $usuario->correo = $request->input('correo');
        $usuario->ciudad_id = $request->input('ciu');

        $usuario->password = Hash::make($request->input('contrasena'));
        $usuario->rol_id = 'docente';
        $usuario->activo = false;

        try {

            $usuario->save();
            return redirect()->back()->with('final','Datos guardados correctamente');

        } catch (Exception $e) {

          return redirect()->back()
            ->withErrors(["error" => "Error al escribir en la base de datos por favor intente mas tarde" . $e]);
        }






    }
}
