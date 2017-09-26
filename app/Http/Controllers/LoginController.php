<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use app\Usuario;

class LoginController extends Controller
{

    function aut(Request $request){

      $cedula = $request->input("cedula");
      $con = $request->input("contrasena");
      

      /*if(Hash::check($con,$conv)){

        return dd(Hash::make($con));
      }else{

        return "las contraseñas no coinciden";
      }*/



    }
}
