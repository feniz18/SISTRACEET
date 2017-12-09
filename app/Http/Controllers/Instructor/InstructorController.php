<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transferencia;
use App\UsuarioTransferencia;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    public function index()
    {
      $transferencias_usuario = [];
      $transferencia_usuario = UsuarioTransferencia::where('usuario_id',Auth::user()->cedula)->get();


      foreach ($transferencia_usuario as $transferenciaU) {
        array_push($transferencias_usuario,$transferenciaU->transferencia_id);
      }

      $transferencia = Transferencia::whereIn('id',$transferencias_usuario)->orderByDesc('id')->get();

      return view('instructor.cursos.verTransferencias')->with('trans',$transferencia);
    }
}
