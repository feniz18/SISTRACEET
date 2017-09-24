@extends('plantillas.layout')
@section('titulo','Inicio de sesion')
@section('Cssp')
  <link rel="stylesheet" type="text/css" href="{{asset('css/ancho.css')}}">
@endsection
@section('contenido')

<div class="div1">



  <div class="container d-flex justify-content-center flex-wrap">

    <div class="card col-xs-10 col-sm-10 col-md-8 col-lg-5">

      <form class="" method="post" action="/login" accept-charset="utf-8">

        {{ csrf_field()}}

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="usuario">Usuario</label>
        <input class="form-control " type="text" id="usuario" placeholder="Usuario">
      </div>


      <div class="form-group col-md-12 text-center">
        <label for="usuario" >Contraseña</label>
        <input class="form-control" type="password" id="usuario"  placeholder="Contraseña" >
      </div>
      <div class="form-group col-md-12 text-center">
        <button type="submit" class="btn btn-primary">INGRESAR</button>
        <button class="btn btn-danger">CANCELAR</button>
      </div>
      </form>
      <div class="col-md-12 text-center">

        <a href="/registro">Registro</a>
        <a href="/recupera">¿Olvidaste tu contraseña?</a>

      </div>
    </div>

  </div>

</div>

@endsection
