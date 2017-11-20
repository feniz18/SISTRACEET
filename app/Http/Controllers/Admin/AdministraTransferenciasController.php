<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transferencia;
use App\Sede;

class AdministraTransferenciasController extends Controller
{
    public function index(){

      $trans = Transferencia::all();
      $sede =  Sede::all();

      return view('admin.transferencia.administraTransferencia')
            ->with(['trans'=> $trans,'sede'=> $sede]);

    }

    public function reglasValidacion()
    {
      $reglas = [
        
      ];
    }
}
