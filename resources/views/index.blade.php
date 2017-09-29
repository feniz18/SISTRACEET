@extends('plantillas.layout')
@section('titulo','Inicio de sesion')
@section('Cssp')
  <link rel="stylesheet" type="text/css" href="{{asset('css/ancho.css')}}">
@endsection
@section('contenido')

<div class="div1">



  <div class="container d-flex justify-content-center flex-wrap">

    <div class="card col-xs-10 col-sm-10 col-md-8 col-lg-5">

      @include('errores.errores')

      <form class="" method="post" action="/" accept-charset="utf-8">

        {{ csrf_field()}}

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="cedula">Cédula</label>
        <input class="form-control " type="number" id="cedula" name="cedula" value="{{old('cedula')}}" placeholder="Ingrese su numero de cédula">
      </div>


      <div class="form-group col-md-12 text-center">
        <label for="contrasena" >Contraseña</label>
        <input class="form-control" type="password" id="contrasena" name="contrasena" placeholder="Ingrese contraseña" >
      </div>

      <div class="form-group col-md-12 recuerdame">
        <input class="form-check-input" name="recuerdame" type="checkbox">
        <label>Recuerdame<label>
      </div>
      <div class="form-group col-md-12 text-center">
        <button type="submit" class="btn btn-primary btn-block">INGRESAR</button>
      </div>
      <div class="form-group col-md-12 text-center">

        <a href="/registro">Registro</a>
        <a href="/recupera">¿Olvidaste tu contraseña?</a>

      </div>
      </form>
    </div>

  </div>

</div>

@endsection
