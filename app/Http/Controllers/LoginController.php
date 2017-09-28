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

      return Auth::attempt($usuario);

    }

    public function logout()
    {
        if(auth::check()){

        }else{



        }
    }
}
