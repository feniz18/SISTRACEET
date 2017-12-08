<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transferencia;
use App\Sede;
use App\Especialidad;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class AdministraTransferenciasController extends Controller
{
    public function index(){

      $trans = Transferencia::all()->sortByDesc('id');
      $sede =  Sede::all();
      $especialidad = Especialidad::all();

      return view('admin.transferencia.administraTransferencia')
            ->with(['trans'=> $trans,'sede'=> $sede,'especialidad' => $especialidad]);

    }

    public function guardar($id = 0,Request $request)
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

      if($id == 0)
      {
        $transferencia = new Transferencia;
      }
      else
      {
        $transferencia = Transferencia::find($id);
      }


      $transferencia->nombre = $request->nombreCurso;
      $transferencia->fecha_inicio = $request->fechaInicio;
      $transferencia->fecha_fin = $request->fechaFinal;
      $transferencia->sede_id = $request->sede;
      $transferencia->cupos = $request->cupos;
      $transferencia->descripcion = $request->observaciones;
      $transferencia->especialidad_id = $request->especialidad;
      $transferencia->save();

      if($id == 0)
      {
        return response()
                ->json(["final" => "Informacion almacenada correctamente"]);
      }
      else
      {
        return response()
                ->json(["final" => "Informacion actualizada correctamente"]);
      }
    }

    public function reglasValidacion()
    {
      $reglas = [
          'nombreCurso'=>'required|max:30|min:5',
          'fechaInicio'=>'required',
          'fechaFinal' => 'required',
          'cupos' => 'required|max:4|min:1',
          'observaciones' => 'max:500',
          'especialidad' => 'required',
      ];

      return $reglas;
    }

    public function reglasPersonalizadas($request)
    {

      $formato_fecha = "d/m/Y";
      $fecha_inicio = Carbon::createFromFormat($formato_fecha,$request->fechaInicio);
      $fecha_fin = Carbon::createFromFormat($formato_fecha,$request->fechaFinal);

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
      }

      $request['fechaInicio'] = $fecha_inicio->toDateString();
      $request['fechaFinal'] =  $fecha_fin->toDateString();
      return $request;
    }

    //Devuelve datos de consulta

    public function cargaTransferenciaModal($id)
    {
      $transferencia = Transferencia::find($id);
      $transferencia->fecha_inicio = Carbon::createFromFormat("Y-m-d", $transferencia->fecha_inicio)
                                            ->format("d/m/Y");
      $transferencia->fecha_fin = Carbon::createFromFormat("Y-m-d", $transferencia->fecha_fin)
                                            ->format("d/m/Y");

      return response()->json(['transferencia' => $transferencia]);
    }

    public function eliminar($id)
    {
      $trans = Transferencia::find($id);
      $trans->horario()->detach();
      $trans->usuarios_transferencias()->detach();

      $trans->delete();

      return response()->json([
        'final' => 'Informacion eliminada correctamente.'
      ]);
    }
}
