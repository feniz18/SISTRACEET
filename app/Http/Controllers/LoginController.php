<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Usuario;

class LoginController extends Controller
{

    public function aut(Request $request){

      $check = $request->input('recuerdame');
      $datos = $request->all();

      $reglas = [
        'cedula' => 'required',
        'contrasena' => 'required'
      ];


      $valida = Validator::make($datos,$reglas);

      if($valida->fails()){

            return redirect()->back()
              ->withErrors($valida->errors())
              ->withInput($request->except('contrasena'));

      }

      $usuario = [

        'cedula'   => $request->input('cedula'),
        'password' => $request->input('contrasena')

      ];

      if (Auth::attempt($usuario,$check)) {

        return redirect('/');

      }else{

        return redirect()->back()
              ->withErrors(['sesion' =>'Usuario y contraseña incorrectos'])
              ->withInput($request->except('contrasena'));
      }

    }

    public function logout()
    {
        if(auth::check()){

          Auth::logout();
          return redirect('/');

        }else{

          return redirect('/');

        }
    }
}
