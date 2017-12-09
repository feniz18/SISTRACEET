<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class InicioController extends Controller
{
  public function index()
  {
    $noticia = Noticia::where('activo', true)->orderBy('created_at','desc')->get();

    return view('inicio')->with('noticias', $noticia);
  }
  public function noticia($id)
  {
    $noticia = Noticia::find($id);

    return view('admin.noticias.verNoticia')->with('noticia', $noticia);
  }

}
