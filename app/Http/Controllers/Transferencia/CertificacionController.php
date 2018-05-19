<?php

namespace App\Http\Controllers\Transferencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transferencia;

class CertificacionController extends Controller
{
    public function cargaModalCert($id)
    {
    	$transferencia = Transferencia::find($id);
    	$transferencia->usuarios_transferencias;

    	return response()->json($transferencia);
    }
}
