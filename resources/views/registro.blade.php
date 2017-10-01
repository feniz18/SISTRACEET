@extends('plantillas.layout')
@section('titulo','Registro')
@section('Cssp')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/registro.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('pick/css/bootstrap-datepicker3.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('pick/css/bootstrap-datepicker3.standalone.min.css')}}">
@endsection
@section('contenido')

<div class="div1">

  <div class="container d-flex justify-content-center flex-wrap">

    <div class="card col-xs-10 col-sm-10 col-md-8 col-lg-5">

      <form class="" method="post" action="registro" accept-charset="utf-8">

          {{ csrf_field()}}

          @include('errores.errores')


      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="cedula">Cedula</label>
        <input class="form-control " name="cedula" type="number" id="cedula" placeholder="Ingrese su cedula" value="{{old('cedula')}}">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input class="form-control " name = "fecha_nacimiento" =type="text" id="fecha_nacimiento" placeholder="mm/dd/aaaa" value="{{old('fecha_nacimiento')}}">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="nombres">Nombres</label>
        <input class="form-control " name = "nombres" =type="text" id="nombres" placeholder="Ingrese sus nombres" value="{{old('nombres')}}">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="apellidos">Apellidos</label>
        <input class="form-control" name="apellidos" type="text" id="apellidos" placeholder="Ingrese sus apellidos" value="{{old('apellidos')}}">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="telefono">Télefono</label>
        <input class="form-control " type="number" name= "telefono" id="telefono" placeholder="Ingrese su télefono" value="{{old('telefono')}}">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="correo">Correo Eléctronico</label>
        <input class="form-control" name="correo" type="email" id="correo" placeholder="Ingrese su correo personal" value="{{old('correo')}}">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="dep">Departamento</label>
        <select class="form-control " name="dep" id="dep" value="{{old('dep')}}">
          <option value = "0" selected>Seleccione departamento</option>
          @foreach ($departamentos as $departamento)

            <option value="{{$departamento->id_departamento}}">{{$departamento->nombre}}</option>

          @endforeach
        </select>
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="ciu">Ciudad</label>
        <select class="form-control " name="ciu" id="ciu" value="{{old('ciu')}}">
          <option value="" selected>Seleccione ciudad</option>
          <option value="1">medellin</option>
        </select>
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="contrasena">Contraseña</label>
        <input class="form-control" name="contrasena" type="password" id="contrasena" placeholder="Ingrese su contraseña" value="{{old('contrasena')}}">
      </div>

    <div class="form-group col-md-12 text-center justify-content-center">
      <label for="rcontrasena">Repetir Contraseña</label>
      <input class="form-control" name="rcontrasena" type="password" id="rcontrasena" placeholder="Repita su contraseña" value="{{old('rcontrasena')}}">
    </div>

      <div class="col-md-12 text-center row">
        <div class="col-6">
          <button type="submit" class="btn btn-primary btn-block">GUARDAR</button>
        </div>
        <div class="col-6 ">
          <a href="/" class="btn btn-danger btn-block">CANCELAR</a>
        </div>
      </div>
      </form>

    </div>

  </div>


</div>


@endsection
@section('Jssp')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <script src ="{{asset('js/combo.js')}}"></script>
  <script src ="{{asset('pick/js/bootstrap-datepicker.min.js')}}"></script>
  <script src ="{{asset('pick/local/bootstrap-datepicker.es.min.js')}}"></script>
  <script>
    $('#dep').select2();
    $('#ciu').select2();
    $('#fecha_nacimiento').datepicker({

      format: "dd/mm/yyyy",
      clearBtn: true,
      language: "es",
      orientation: "bottom left"

    });
    </script>

@endsection
