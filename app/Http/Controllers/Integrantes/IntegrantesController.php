<?php

namespace App\Http\Controllers\Integrantes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IntegrantesController extends Controller
{
    public function index()
    {
		return view("compartida.integrantes.integrantes");    	
    }
}
