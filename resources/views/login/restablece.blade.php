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

      <form  method="post" action="{{route('post.reset')}}" accept-charset="utf-8">

          {{ csrf_field()}}

          @if(session('status'))

            <div class="alert alert-success" role="alert">
              {{session('status')}}
            </div>

          @else
              @include('errores.errores')
          @endif
          <input type="hidden" name="token" value="{{ $token }}">

          <div class="form-group col-md-12 text-center justify-content-center">
            <label for="email">@lang('sistra.email')</label>
            <input class="form-control" name="email" type="email" id="contrasena" placeholder="Ingrese su correo electronico" value="{{old('email')}}">
          </div>

          <div class="form-group col-md-12 text-center justify-content-center">
            <label for="password">@lang('sistra.nuevaContraseña')</label>
            <input class="form-control" name="password" type="password" id="contrasena" placeholder="Ingrese su nueva contraseña">
          </div>
          <div class="form-group col-md-12 text-center justify-content-center">
            <label for="rcontrasena">@lang('sistra.repetirContrasena')</label>
            <input class="form-control" name="password_confirmation" type="password" id="rcontrasena" placeholder="Repita su nueva contraseña" >
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">@lang('sistra.guardar')</button>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection
