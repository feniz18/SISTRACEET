<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Usuario;
use Reminders;
use Mail;

class RecuperaController extends Controller
{

    Public function index(){

        return View('login.recupera');

    }
    public function postRecupera(Request $request){

      $usuario = Usuario::where('email',$request->email)->first();
      //return(count($usuario));
        if(count($usuario) == 0){

              return redirect()->back()
              ->with(['final' => 'Su informacion se ha enviado correctamente']);

        }

        $reminder = Reminder::exists($usuario) ?: Reminder::create($usuario);
        $this->enviarEmail($usuario,$reminder->code);
        return redirect()->back()
        ->with(['final' => 'Su informacion se ha enviado correctamente']);
    }

    private function enviarEmail($usuario,$codigo){

      Mail::send('correo.recupera',[
          'user'=> $usuario,
          'code' => $codigo,
      ],function($message) use ($usuario){
            $message->to($usuario->email);
            $message
            ->subject("SISTRA CEET |Hola $usuario->nombres recientemente has solicitado el restablecimiento de contraseña");
      });

    }
}
