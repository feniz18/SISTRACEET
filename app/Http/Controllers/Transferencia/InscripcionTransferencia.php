<?php

namespace App\Http\Controllers\Transferencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UsuarioTransferencia;
use Carbon\Carbon;
use App\TransferenciaSemana;
use App\UsuarioSemana;
use App\Usuario;
use App\Transferencia;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarNotificacionTransferencia;

class InscripcionTransferencia extends Controller
{
  public $formato = 'H:i:s';

    public function cargaDatosModalUsuario($id)
    {
      $usuarios_verificados = $this->cargaDatosModal($id);
      $usuarios = Usuario::whereIn('cedula', $usuarios_verificados)->get();
      $usuarios_registrado = UsuarioTransferencia::where('transferencia_id', $id)
                          ->join(
                            'usuario',
                            'usuario.cedula',
                            '=',
                            'usuario_transferencia.usuario_id'
                            )->select('usuario.cedula','usuario.nombres','usuario.apellidos')->get();

        return response()->json(['usuarios_registrado' => $usuarios_registrado,'usuarios' => $usuarios]);
    }

    public function cargaDatosModal($id)
    {

      $transferencia = TransferenciaSemana::where('transferencia_id',$id)->get();
      $transferencia_datos = Transferencia::find($id);
      $dia = [];
      $usuarios_inscritos = [];

      $usuarios_transferencias = UsuarioTransferencia::where('transferencia_id',$id)->get();

      foreach ($transferencia as $trans) {
        array_push($dia,$trans->dia_semana_id);
      }
      foreach ($usuarios_transferencias as $ustra) {
        array_push($usuarios_inscritos, $ustra->usuario_id);
      }

      $dia = array_values(array_unique($dia));

      $usuarios = Usuario::where('especialidad_id',$transferencia_datos->especialidad_id)->get()->except($usuarios_inscritos);

      $usuarios_filtro=[];
      //INICIO FOR EACH DE VALIDACION DE DIAS
      foreach ($usuarios as $usuario) {

        $validar = false;
        $dias_usuario = [];

          foreach ($usuario->pivoteUsuario as $usuario_semana) {
            array_push($dias_usuario,$usuario_semana->dia_semana_id);
          }

        for ($i=0; $i < count($dia); $i++) {

          if(in_array($dia[$i],$dias_usuario))
          {
            $validar = true;
          }else
          {
            $validar = false;
            break;
          }
        }

        if($validar)
        {
          array_push($usuarios_filtro,$usuario->cedula);
        }
      }

      //FIN FOR EACH DE VALIDACION DE DIAS
      //INICIO FOR EACH DE VALIDACION DE HORARIO

      $usuarios_horario = Usuario::whereIn('cedula',$usuarios_filtro)->get();

      $usuarios_final = [];

      foreach ($usuarios_horario as $usuario_horario) {

        $dias_validados = [];

        foreach ($usuario_horario->pivoteUsuario as $usuario) {
          $hora_inicio_usuario = Carbon::createFromFormat($this->formato,$usuario->hora_inicio);
          $hora_fin_usuario = Carbon::createFromFormat($this->formato,$usuario->hora_fin);

          if($hora_inicio_usuario > $hora_fin_usuario)
          {
            $hora_fin_usuario->addDay();
          }

          $transferencia_filtro = TransferenciaSemana::where('transferencia_id',$id)->where('dia_semana_id',$usuario->dia_semana_id)->get();
            foreach ($transferencia_filtro as $trans) {

              $hora_inicio_trans = Carbon::createFromFormat($this->formato,$trans->hora_inicio);
              $hora_fin_trans = Carbon::createFromFormat($this->formato,$trans->hora_fin);

              if($hora_inicio_trans > $hora_fin_trans)
              {
                $hora_fin_trans->addDay();
              }

              if
              ($hora_inicio_trans->between($hora_inicio_usuario, $hora_fin_usuario)
                and
               $hora_fin_trans->between($hora_inicio_usuario, $hora_fin_usuario)
              )
              {
                  $dias_validados[$usuario->dia_semana_id] = true;
              }
              else
              {
                if(array_key_exists($usuario->dia_semana_id, $dias_validados))
                {
                  if($dias_validados[$usuario->dia_semana_id])
                  {
                    $dias_validados[$usuario->dia_semana_id] = true;
                  }
                  else
                  {
                    $dias_validados[$usuario->dia_semana_id] = false;
                  }
                }else {
                  $dias_validados[$usuario->dia_semana_id] = false;
                }
              }
            }

          }

            if (!in_array(false, $dias_validados )) {

                array_push($usuarios_final, $usuario_horario->cedula);

            }
      }

       return $usuarios_final;
    }

    public function registrarTransferencia(Request $request)
    {
        $transferencia = Transferencia::find($request->id_transferencia);

        $instructores_id = json_decode($request->instructores);

        $transferencia->usuarios_transferencias()->sync($instructores_id);

        return response()->json(['final' => 'Informacion almacenada correctamente']);
    }
    public function enviarCorreo($id)
    {

      $transferenciaUsuario = UsuarioTransferencia::where('transferencia_id',$id)->get();

      if($transferenciaUsuario->isEmpty())
      {
          return response()->json('Esta transferencia todavia no tiene un usuario inscrito para el envio de correo');
      }

      $transferencia = Transferencia::find($id);

      foreach ($transferenciaUsuario as $trans) {

        $usuario = Usuario::find($trans->usuario_id);
        Mail::to($usuario->email)->send(new EnviarNotificacionTransferencia($usuario,$transferencia));

      }
      return response()->json('Información enviada a correos electrónicos correctamente');

    }
}
