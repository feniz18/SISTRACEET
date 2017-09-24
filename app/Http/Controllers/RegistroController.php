<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
}
