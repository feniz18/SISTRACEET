<?php

namespace App\Http\Controllers\Noticia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Noticia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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

    public function guardarNoticias(Request $request)
    {
      $datos = $request->all();
      $reglas =
      [
        'contenido' => 'required|min:50',
        'imagenNoticia' => 'required|mimes:jpeg,png,gif',
        'titulo' => 'required'
      ];

      $validacion = Validator::make($datos,$reglas);

      if($validacion->fails())
      {
        return redirect()->back()
          ->withErrors($validacion->errors())
          ->withInput($request->all());
      }

      $noticia = new Noticia();

      $noticia->titulo = $request->titulo;
      $noticia->contenido = $request->contenido;
      $noticia->autor = Auth::user()->cedula;

      $noticia->save();

      $extension = $request->file('imagenNoticia')
                               ->getClientOriginalExtension();

      $request->file('imagenNoticia')->storeAs('public','noticia'.$noticia->id . '.' . $extension);

      $imagen = '.'. $extension;

      $noticia->imagen = $imagen;

      $noticia->save();

      return redirect("/administraNoticias");

    }

    public function activar($id)
    {
      $noticia = Noticia::find($id);

      if ($noticia->activo==false) {
        $noticia->activo = true;
      }else {
        $noticia->activo = false;
      }

      $noticia->save();

      return redirect('/administraNoticias');
    }

    public function eliminar($id)
    {
      $noticia = Noticia::find($id);
      $noticia->delete();

      return redirect('/administraNoticias');
    }
}
