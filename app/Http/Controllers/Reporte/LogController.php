<?php

namespace App\Http\Controllers\Reporte;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;

class LogController extends Controller
{

    public function index(){

      return View('admin.reportes.log');

    }

    public function reporte(){
      Excel::create('Logs SistraCeet',function($excel){

        $excel->sheet('Usuarios',function($hoja){

          $data=[];

          array_push($data, ['kevin','arnold']);

          $hoja->fromArray($data);
        });

      })->download('xlsx');


    }

}
