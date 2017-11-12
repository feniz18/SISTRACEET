<?php

namespace App\Http\Controllers\Reporte;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;
use App\Usuario;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class LogController extends Controller
{
    private $logs_usuario = [];

    public function index(){

      return View('admin.reportes.log');

    }

    public function reporte(){

      // funcion excel encargada de generar el reporte por fechas

      Excel::create('Logs SistraCeet',function($excel){

        $excel->sheet('Usuarios',function($hoja){

          $usuario = Usuario::where('created_at','>','2010-11-01')->get();

              foreach ($usuario as $usuarios) {

                foreach($usuarios->logs as $logs){

                  $this->logs_usuario[] = [
                            'Cedula' => $usuarios->cedula,
                            'Nombres y apellidos' => $usuarios->nombres . ' ' . $usuarios->apellidos,
                            'Fecha Logeo' => $logs->created_at,
                            'IP' => $logs->direccion_ip];
                }

              }
              
            $datos = new Collection($this->logs_usuario);

          $hoja->fromArray($datos);

        });

      })->download('xlsx');
    }
}
