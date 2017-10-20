<?php

namespace App\Http\Controllers\Libreria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Libreria;
use DateTime;

class FechaController extends Controller
{

    public function formatFechaIn($fecha){

      //Convierte la fecha a hora de sistema dependiendo el formato que le indique de entrada
      $fecha = DateTime::createFromFormat('d/m/Y', $fecha);
      $fecha = $fecha->format('Y-m-d');

      return $fecha;

    }
    public function formatFechaOut($fecha){

      $fecha = new DateTime($fecha);
      $fecha = $fecha->format('d-m-Y');

      return $fecha;

    }

    public function formatFechaOutBarra($fecha){

      $fecha = new DateTime($fecha);
      $fecha = $fecha->format('d/m/Y');

      return $fecha;

    }
}
