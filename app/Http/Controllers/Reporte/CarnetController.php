<?php

namespace App\Http\Controllers\Reporte;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use PDF;

class CarnetController extends Controller
{
    public function index()
    {
    	$info = ["nombre" => "david vargas"];

        //dd("sdfsdfsdf");
        //return view("layouts.carnet");
    	//dd($info['nombre']);
        //$pdf = PDF::loadView("layouts.carnet",['info' => $info]);
        //$pdf->setPaper(array(4000,4000,0,0));
        //$pdf->setPaper(array(4000,4000,0,0));
        //$pdf->render();
        $html = View::make("layouts.carnet");
        // $pdf = new PDF();
        //$pdf->set_option('isHtml5ParserEnabled', true);
        //$pdf->setPaper('a4','landscape');
        //return $html;

        $pdf = PDF::loadHTML($html)->setOptions(['isHtml5ParserEnabled' => true,]);
        //$pdf->set_option('isHtml5ParserEnabled', true);
    	return $pdf->stream();
    	
    }

    public function busca_carnet($cedula)
    {
    	//$info = ["nombre" => "david vargas"];
    	//$pdf = PDF::loadView("<h1>{{$}}",$info);
    	//561156return $pdf->download("run.pdf");
    }
}
