<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transferencia;
use App\Sede;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class AdministraTransferenciasController extends Controller
{
    public function index(){

      $trans = Transferencia::all();
      $sede =  Sede::all();

      return view('admin.transferencia.administraTransferencia')
            ->with(['trans'=> $trans,'sede'=> $sede]);

    }

    public function guardar(Request $request)
    {

      $datos = $request->all();
      $reglas = $this->reglasValidacion();
      $validacion = Validator::make($datos,$reglas);

      if($validacion->fails())
      {
        return response()->json($validacion->errors());
      }

      $request = $this->reglasPersonalizadas($request);

      if(!is_object($request))
      {
        return response()->json($request);
      }

      $transferencia = new Transferencia;

      $transferencia->nombre = $request->nombreCurso;
      $transferencia->fecha_inicio = $request->fechaInicio;
      $transferencia->fecha_fin = $request->fechaFinal;
      $transferencia->hora_inicio = $request->hora_inicio;
      $transferencia->hora_fin = $request->hora_fin;
      $transferencia->sede_id = $request->sede;
      $transferencia->cupos = $request->cupos;
      $transferencia->descripcion = $request->observaciones;
      $transferencia->save();
      $transferencia = Transferencia::find($transferencia->id);
      $transferencia->dias_semana()->attach($request->horario);

      return response()->json(["final" => "Informacion almacenada correctamente"]);
    }

    public function reglasValidacion()
    {
      $reglas = [
          'nombreCurso'=>'required|max:30|min:5',
          'fechaInicio'=>'required',
          'fechaFinal' => 'required',
          'cupos' => 'required|max:4|min:1',
          'hora_inicio' => 'required',
          'hora_fin' => 'required',
          'observaciones' => 'max:500',
      ];

      return $reglas;
    }

    public function reglasPersonalizadas($request)
    {

      $formato_fecha = "d/m/Y";
      $formato_hora = 'h:i A';
      $fecha_inicio = Carbon::createFromFormat($formato_fecha,$request->fechaInicio);
      $fecha_fin = Carbon::createFromFormat($formato_fecha,$request->fechaFinal);
      $hora_inicio = Carbon::createFromFormat($formato_hora,$request->hora_inicio);
      $hora_fin = Carbon::createFromFormat($formato_hora,$request->hora_fin);
      $horario=[];
      for ($i=1; $i < 8 ; $i++) {
        if($request['chulo-'. $i] == 'on')
        {
            array_push($horario, $i);
        }
      }
      $request['horario'] = $horario;

      if($fecha_inicio>$fecha_fin)
      {
        $error =
         ['error' =>
         'El cambo fecha de inicio no puede ser mayor a fecha fin'];
         return $error;
      }
      elseif($fecha_inicio<Carbon::now() or $fecha_fin<Carbon::now())
      {
        $error =
        ['error' =>
        'la fecha de inicio y la de fin no pueden ser anteriores a hoy'];
        return $error;
      }elseif($request->sede==0)
      {
        $error =
        ['error' =>
        'El campo sede es obligatorio'];
        return $error;
      }elseif(count($request['horario'])==0)
      {
        $error =
        ['error' =>
        'Seleccione por lo menos un dia de la semana'];
        return $error;
      }
      $request['fechaInicio'] = $fecha_inicio->toDateString();
      $request['fechaFinal'] =  $fecha_fin->toDateString();
      $request['hora_inicio'] = $hora_inicio->toTimeString();
      $request['hora_fin'] = $hora_fin->toTimeString();
      return $request;
    }
}
