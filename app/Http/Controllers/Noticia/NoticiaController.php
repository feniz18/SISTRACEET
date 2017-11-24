<?php

namespace App\Http\Controllers\Noticia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
      $noticias = Noticia::all();
      return view('admin.noticias.administraNoticias')->with(['noticias'=>$noticias]);
    }
    public function indexCrear()
    {
      return view('admin.noticias.crearNoticia');
    }
}
