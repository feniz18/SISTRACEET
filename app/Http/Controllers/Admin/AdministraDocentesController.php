<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;

class AdministraDocentesController extends Controller
{

    public function index(){

      $usuario = Usuario::all()->sortByDesc('created_at');

      return view("admin.docente.administraDocentes")->with(['usuario'=>$usuario]);

    }
}
