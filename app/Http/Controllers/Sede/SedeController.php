<?php

namespace App\Http\Controllers\Sede;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sede;
use Illuminate\Support\Facades\Validator;

class SedeController extends Controller
{
    public function index()
    {
      $sedes = Sede::all();
      return view('admin.sedes.administraSedes')->with('sedes',$sedes);
    }

    public function agregarSede(Request $request)
    {
      $datos = $request->all();
      $reglas = [
        'nombre' => 'required',
        'direccion' => 'required'
      ];

      $validacion = Validator::make($datos,$reglas);

      if($validacion->fails())
      {
          return response()->json($validacion->errors());
      }

      $sede = new Sede;
      $sede->nombre = $request->nombre;
      $sede->direccion = $request->direccion;
      $sede->save();

      return response()->json(
              [
                'final' =>'Informacion almacenada correctamente'
              ]
            );
    }

    public function actualizaSede($id,Request $request)
    {
      $datos= $request->all();
      $reglas = [
        'nombre' => 'required',
        'direccion' => 'required'
      ];

      $validacion = Validator::make($datos,$reglas);

      if($validacion->fails())
      {
          return response()->json($validacion->errors());
      }

      $sede = Sede::find($id);
      $sede->nombre = $request->nombre;
      $sede->direccion = $request->direccion;
      $sede->save();

      return response()->json(
              [
                'final' =>'Informacion almacenada correctamente'
              ]
            );
    }

    public function cargaDatosSede($id)
    {
      $sede = new Sede;
      $sede = $sede->ComboSedes($id);
        return response()->json($sede);
    }
    public function eliminar($id)
    {
      $sede = Sede::find($id);
      try {
        $sede->delete();
      } catch (Exception $e) {
        return response()->json(false);
      }
      return response()->json(true);

    }
}
