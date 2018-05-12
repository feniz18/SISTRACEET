<?php

namespace App\Http\Controllers\Reporte;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection as Collection;
use View;
use PDF;

class CarnetController extends Controller
{
    public function index()
    {
    	$info =
        [
                [
                    "nombre" => "LUIS AGUSTIN",
                    "apellido" => "DIAZ BLANCO",
                    "cedula" => "5698399",
                    "rh" => "O",
                    "factor" => "+",
                    "ficha" => "1193362",
                    "programa" => "ADSI",
                    "imagen" => "img/integrantes/luis.png",
                ],

                [
                    "nombre" => "DAVID STEVEN",
                    "apellido" => "MARTINEZ VARGAS",
                    "cedula" => "1013651642",
                    "rh" => "O",
                    "factor" => "+",
                    "ficha" => "1193362",
                    "programa" => "ADSI",
                    "imagen" => "img/integrantes/david.png",
                ],

                [
                    "nombre" => "JUAN SEBASTIAN",
                    "apellido" => "CASTIBLANCO PULIDO",
                    "cedula" => "1073247444",
                    "rh" => "O",
                    "factor" => "+",
                    "ficha" => "1193362",
                    "programa" => "ADSI",
                    "imagen" => "img/integrantes/juan.png",
                ],
        ];

        $datos = Collection::make($info);

        
        $html = View::make("layouts.carnet",["integrante" => $datos]);
        

        $pdf = PDF::loadHTML($html)->setOptions(['isHtml5ParserEnabled' => true,]);


    	return $pdf->download("integrantesSISTRA.pdf");
    	
    }

   
}
