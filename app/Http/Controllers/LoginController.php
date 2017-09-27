<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use app\Usuario;

class LoginController extends Controller
{


    function aut(Request $request){


      $usuario = [

        'cedula' => 1013651642,
        'contrasena' => "56115611go"

      ];

      return dd(Auth::attempt($usuario));


      /*if(Auth::attempt($usuario)){

        return "Autenticacion correcta su nombre es" + Auth::nombres();

      }else{

        return "incorrecto";
      }*/


      /*if(Hash::check($con,$conv)){

        return dd(Hash::make($con));
      }else{

        return "las contraseñas no coinciden";
      }*/



    }
}
