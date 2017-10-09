<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Departamento;
use App\Ciudad;

class AdministraDocentesController extends Controller
{

    public function index(){

      $usuario = Usuario::all()->sortByDesc('created_at');
      $departamento = Departamento::all();
      $ciudad = Ciudad::all();

      return view("admin.docente.administraDocentes")->with(['usuario'=>$usuario,'departamento'=>$departamento,'ciudad'=>$ciudad]);

    }
}
