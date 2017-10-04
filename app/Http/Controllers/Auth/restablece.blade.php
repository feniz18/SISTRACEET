@extends('plantillas.layout')
@section('titulo','Registro')
@section('Cssp')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/registro.css')}}">
@endsection
@section('contenido')

<div class="div1">

  <div class="container d-flex justify-content-center flex-wrap">

    <div class="card col-xs-10 col-sm-10 col-md-8 col-lg-5">

      <form  method="post" action="GuardaRecupera" accept-charset="utf-8">

          {{ csrf_field()}}

          @if($errors->first('final'))

            <div class="alert alert-success" role="alert">
              Datos enviados al correo correctamente.
            </div>

          @else
              @include('errores.errores')
          @endif


          <div class="form-group col-md-12 text-center justify-content-center">
            <label for="email">Nueva contraseña</label>
            <input class="form-control" name="contrasena" type="password" id="contrasena" placeholder="Ingrese su nueva contraseña" value="{{old('email')}}">
          </div>
          <div class="form-group col-md-12 text-center justify-content-center">
            <label for="email">Repita su Contraseña</label>
            <input class="form-control" name="rcontrasena" type="password" id="rcontrasena" placeholder="Repita su nueva contraseña" value="{{old('email')}}">
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection
