<?php

namespace App\Http\Controllers\Departamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Departamento;
use App\Ciudad;
use App\Usuario;

class DepartamentoMunicipioController extends Controller
{
      public function departamento(){

        $departamento = Departamento::all();

        return $departamento;

      }

      public function ciudad($departamento){
        $ciudad = new Ciudad;

        return $ciudad->where('departamento_id', $departamento)->get();

      }

      public function ciudadUsuario($cedula){

        $usuario = Usuario::find($cedula);
        $ciudad = new Ciudad;

        return $ciudad->where('id_ciudad', $usuario->ciudad_id)->get();

      }
}
