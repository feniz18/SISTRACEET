<?php

namespace App\Http\Controllers\Reporte;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class CarnetController extends Controller
{
    public function index()
    {
    	$info = ["nombre" => "david vargas"];

    	//dd($info['nombre']);
    	$pdf = PDF::loadView("layouts.carnet",['info' => $info]);
    	return $pdf->download("run.pdf");
    	//return view("admin.reportes.carnet");
    }

    public function busca_carnet($cedula)
    {
    	$info = ["nombre" => "david vargas"];
    	//$pdf = PDF::loadView("<h1>{{$}}",$info);
    	return $pdf->download("run.pdf");
    }
}
