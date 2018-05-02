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

        //dd("sdfsdfsdf");
        //return view("layouts.carnet");
    	//dd($info['nombre']);
        $pdf = new PDF;
        //$pdf->setPaper(array(4000,4000,0,0));
    	$pdf->loadView("layouts.carnet",['info' => $info]);
        //$pdf->setPaper(array(4000,4000,0,0));
        //$pdf->render();
    	return $pdf->download();
    	//return view("admin.reportes.carnet");
    }

    public function busca_carnet($cedula)
    {
    	//$info = ["nombre" => "david vargas"];
    	//$pdf = PDF::loadView("<h1>{{$}}",$info);
    	//561156return $pdf->download("run.pdf");
    }
}
