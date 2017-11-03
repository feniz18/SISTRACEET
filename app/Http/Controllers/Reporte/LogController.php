<?php

namespace App\Http\Controllers\Reporte;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;
use App\Usuario;
use Carbon\Carbon;

class LogController extends Controller
{

    public function index(){

      return View('admin.reportes.log');

    }

    public function reporte(Usuario $usuario){
/*
      $usuario = $usuario->where([
        ['created_at','>=','2017-01-01'],
        //['created_at','<=','2017-10-31'],

      ]);
    $usuario->each(function($usuario){

      $usuario->logs;

    });

    dd($usuario);
      foreach ($logeo as $log) {
        array_push($fechas, $log->created_at->toDateString());
      }*/

      Excel::create('Logs SistraCeet',function($excel){

        $excel->sheet('Usuarios',function($hoja){

          $data=[];

          array_push($data, ['kevin','arnold']);

          $hoja->fromArray($data);
        });

      })->download('xlsx');


    }

}
