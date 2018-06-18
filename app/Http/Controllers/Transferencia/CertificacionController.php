<?php

namespace App\Http\Controllers\Transferencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transferencia;
use App\UsuarioTransferencia;

class CertificacionController extends Controller
{
    public function cargaModalCert($id)
    {
    	$transferencia = Transferencia::find($id);
    	$transferencia->usuarios_transferencias;

    	return response()->json($transferencia);
    }

    public function certifica($cedula,$id)
    {
    	$transferencia = UsuarioTransferencia::where("usuario_id",$cedula)
    											->where("transferencia_id",$id);

    	if (!$transferencia->count() == 0) {

	    	if($transferencia->first()->aprobacion){
	    		$transferencia->update(["aprobacion" => 0]);
	    	}
	    	else
	    	{
	    		$transferencia->update(["aprobacion" => 1]);
	    	};
    	}

    	return response()->json($transferencia->first()->aprobacion);
    }
}
