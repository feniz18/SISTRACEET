<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transferencia;

class AdministraTransferenciasController extends Controller
{
    public function index(){

      $trans = Transferencia::all();

      return view('admin.transferencia.administraTransferencia')->with('trans', $trans);

    }
}
