<?php

namespace App\Http\Controllers\Transferencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transferencia;
use App\Dia_semana;
use App\TransferenciaSemana;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HorarioTransferenciaController extends Controller
{
  protected $formato_hora_in='h:i A';
  protected $formato_hora_out='H:i:s';
    public function index($id)
    {
      $transferencia = Transferencia::find($id);
      $semana = Dia_semana::all();

      return view('admin.transferencia.horario.horarioTransferencia')->with(['transferencia' => $transferencia,'semana' => $semana]);
    }
    public function guardarHorario(Request $request)
    {

      $datos = $request->all();
      $reglas = $this->reglas();

      $validacion = Validator::make($datos,$reglas);

      if($validacion->fails())
      {
        return response()->json($validacion->errors());
      }

      $request = $this->validacionesPersonalizadas($request);
      if(!is_object($request))
      {
        return $request;
      }

      $transferencia = Transferencia::find($request->idTransferencia);
      $transferencia->horario()
              ->attach($request->dia,
              ['hora_inicio'=> $request->hora_inicio,
               'hora_fin' => $request->hora_fin]
              );

      return response()->json(
        [
          'final' => "informacion actualizada correctamente.",
          'id' => $request->idTransferencia,
        ]
      );
    }

    public function validacionesPersonalizadas($request)
    {
      $hora_inicio = Carbon::createFromFormat($this->formato_hora_in,$request->hora_inicio);
      $hora_fin = Carbon::createFromFormat($this->formato_hora_in,$request->hora_fin);

      $respuesta = [];

      if($hora_inicio==$hora_fin)
      {
        $respuesta = ['error'
        =>
        'La hora inicial no puede ser igual a la fecha final',
        ];
        return $respuesta;
      }
      else if($hora_inicio>$hora_fin)
      {
        $hora_fin->addDay();
      }
      $dia_semana =
      DB::table('transferencia')
          ->join('transferencia_semana',
          function($join) use($request)
          {
            $join->on
            (
              'transferencia.id','=','transferencia_semana.transferencia_id'
            )
            ->where(
              'transferencia_semana.dia_semana_id','=',$request->dia
            );
          })->where('transferencia.id','=',$request->idTransferencia)->get();

      for ($i=0; $i < count($dia_semana) ; $i++) {
        $hora_inicio_BD =  Carbon::createFromFormat($this->formato_hora_out,$dia_semana[$i]->hora_inicio);
        $hora_fin_BD =  Carbon::createFromFormat($this->formato_hora_out,$dia_semana[$i]->hora_fin);
        if($hora_inicio_BD>$hora_fin_BD)
        {
          $hora_fin_BD->addDay();
        }

        if(
          $hora_inicio->between($hora_inicio_BD,$hora_fin_BD)
          or
          $hora_fin->between($hora_inicio_BD,$hora_fin_BD)
          or
          $hora_inicio_BD->between($hora_inicio,$hora_fin)
          or
          $hora_fin_BD->between($hora_inicio,$hora_fin)
          )
        {
          $respuesta = [
            'error' => 'Ya existe un horario con este rango por favor verifique'
          ];
          return $respuesta;
        }
      }
      $request['hora_inicio'] = $hora_inicio->format($this->formato_hora_out);
      $request['hora_fin'] = $hora_fin->format($this->formato_hora_out);

      return $request;
    }

    public function reglas()
    {
      return $reglas=
      [
        'dia' => 'required',
        'hora_inicio' => 'required',
        'hora_fin' => 'required'
      ];
    }

    public function eliminarHorario($id)
    {
      $transferencia_semana = TransferenciaSemana::find($id);
      $id = $transferencia_semana->transferencia_id;

      $transferencia_semana->delete();

      return response()->json(['final' => 'Horario eliminado correctamente','id' => $id]);
    }
}
