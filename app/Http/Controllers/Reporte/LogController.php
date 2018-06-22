<?php

namespace App\Http\Controllers\Reporte;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;
use App\Usuario;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use App\Log_usuario;
use App\Exportar\ExportarExcelLog;

class LogController extends Controller
{
    private $logs_usuario = [];

    public function index(){

      return View('admin.reportes.log');

    }

    public function reporte(Request $request){

       
      $reglas=[
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required'

      ];

      $validacion = Validator::make($request->all(), $reglas);


      if ($validacion->fails()){
        return response()->json($validacion->errors());
      }

      $request['fecha_inicio'] = Carbon::createFromFormat('d/m/Y', $request->fecha_inicio)->toDateString();
      $request['fecha_fin'] = Carbon::createFromFormat('d/m/Y', $request->fecha_fin)->toDateString();

      $fecha_inicio = Carbon::createFromFormat('Y-m-d',$request->fecha_inicio);
      $fecha_fin = Carbon::createFromFormat('Y-m-d',$request->fecha_fin);

      if ($fecha_inicio>$fecha_fin) {

          return response()->json(['error' => 'La fecha de inicio no debe ser mayor a la fecha fin.']);

      }elseif($fecha_fin<$fecha_inicio){

            return response()->json(['error' => 'La fecha de fin no puede ser menor a la fecha inicio.']);
      }

    return response()->json(
      [
       'fecha_ini'=>$request->fecha_inicio,
       'fecha_fin' => $request->fecha_fin
      ]);


    }

    public function descargaReporte($fecha_inicio,$fecha_fin){

       return (new ExportarExcelLog($fecha_inicio,$fecha_fin))->download("exporta.xlsx");

    }

}
