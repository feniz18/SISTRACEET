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

      <form class="" method="post" action="/login" accept-charset="utf-8">

          {{ csrf_field()}}

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="cedula">Cedula</label>
        <input class="form-control " type="number" id="cedula" placeholder="Ingrese su cedula">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="nombre">Nombres</label>
        <input class="form-control " type="text" id="nombre" placeholder="Ingrese sus nombres">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="apellido">Apellidos</label>
        <input class="form-control " type="text" id="apellido" placeholder="Ingrese sus apellidos">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="telefono">Telefono</label>
        <input class="form-control " type="number" id="telefono" placeholder="Ingrese sus apellidos">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="email">Correo Eléctronico</label>
        <input class="form-control " type="text" id="email" placeholder="Ingrese su correo personal">
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="dep">Departamento</label>
        <select class="form-control " name="dep" id="dep">
          <option value = "0" selected>Seleccione departamento</option>
          @foreach ($departamentos as $departamento)

            <option value="{{$departamento->id_departamento}}">{{$departamento->nombre}}</option>

          @endforeach
        </select>
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="ciu">Ciudad</label>
        <select class="form-control " name="ciu" id="ciu">
          <option value="0" selected>Seleccione ciudad</option>
        </select>
      </div>

      <div class="form-group col-md-12 text-center justify-content-center">
        <label for="contrasena">Contraseña</label>
        <input class="form-control " type="password" id="contrasena" placeholder="Ingrese su contraseña">
      </div>

    <div class="form-group col-md-12 text-center justify-content-center">
      <label for="rcontrasena">Repetir Contraseña</label>
      <input class="form-control " type="password" id="rcontrasena" placeholder="Repita su contraseña">
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
  <script type="text/javascript">
    $('#dep').select2();
    $('#ciu').select2();
    </script>

@endsection
