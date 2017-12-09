<?php

namespace App\Http\Controllers\Reporte;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Usuario;
use Illuminate\Support\Collection;
use Excel;

class ReporteUsuarioController extends Controller
{

    protected $usuarios;

    public function index()
    {
      return view('admin.reportes.usuarios');
    }

    public function generarReporte(Request $request)
    {

      if($request->fecha_inicio == "" or $request->fecha_fin == "")
      {
        return response()->json(['error'=> 'Por favor digite la fecha de inicio y de finalizacion']);
      }

      $fecha_inicio = Carbon::createFromFormat('d/m/Y', $request->fecha_inicio);
      $fecha_fin = Carbon::createFromFormat('d/m/Y', $request->fecha_fin);

      if($fecha_inicio>$fecha_fin)
      {
        return response()->json(['error'=> 'La fecha de inicio no puede ser mayor a la fecha fin']);
      }

      return response()->json
              ([
                'final' => "",
                "fecha_inicio" => $fecha_inicio->format('Y-m-d'),
                "fecha_fin" => $fecha_fin->format('Y-m-d'),
              ]);

    }

    public function generarReportePost($fecha_inicio,$fecha_fin)
    {

      $usuario = Usuario::whereDate('created_at','>',$fecha_inicio)->whereDate('created_at','<',$fecha_fin)->get();

      $this->usuarios = $usuario->toArray();

      Excel::create('Logs SistraCeet',function($excel){

        $excel->sheet('Usuarios',function($hoja){

            $datos = new Collection($this->usuarios);

            $hoja->fromArray($datos);

        });

      })->download('xlsx');
    }
}
