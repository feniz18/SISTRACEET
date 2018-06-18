<?php

namespace App\Http\Controllers\Reporte;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use PDF;
use App\UsuarioTransferencia;
use App\Transferencia;
use App\Usuario;

class CertificadoController extends Controller
{
    public function certificado($cedula,$idTransferencia)
    {
    	$usuarioTransferencia = UsuarioTransferencia::where("usuario_id",$cedula)
    												->where("transferencia_id",$idTransferencia)->get();

    	if(!count($usuarioTransferencia) == 0){

    		if ($usuarioTransferencia->first()->aprobacion == 1) {

    			$usuario = Usuario::find($cedula);
    			$transferencia = Transferencia::find($idTransferencia);
	    		setlocale(LC_ALL, 'es_co');
	    	
	        	$html = View::make("admin.reportes.certificado",["usuario" => $usuario, "transferencia" => $transferencia]);
	        

	        	$pdf = PDF::loadHTML($html)->setOptions(['isHtml5ParserEnabled' => true,])->setPaper("letter","landscape");


	    		return $pdf->download($transferencia->id . "-" . $usuario->cedula . ".pdf");
    		}else{
    			abort(403, 'Esta persona no tiene certificacion');
    		}
    	}
    	abort(403, 'Esta persona no existe');
    	
    }
}
