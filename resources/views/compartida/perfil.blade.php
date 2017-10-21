@extends('plantillas.general')
@section('titulo','Administracion de instructores')
@section('seccion','Perfil')
@section('subseccion','Modificar perfil')
@section('css')
<link href="{{asset('css/input/inputFile.css')}}" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
<link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">

@endsection
@section('contenido')

<div class="progress progress-lg active" id="carga">
  <div id="progreso" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">0% Complete</span>
  </div>
</div>

          <div class="box box-widget widget-user" id="contenido" style="display:none;">

            <div class="widget-user-header bg-red">
              <h3 class="widget-user-username">{{Auth::user()->nombres}} {{Auth::user()->apellidos}}</h3>
              <h5 class="widget-user-desc">{{Auth::user()->rol_id}}</h5>
            </div>
            <div class="widget-user-image">
              @if(Auth::user()->imagen == null)
                @php($ruta ='storage/defecto.png')
              @else
                @php($ruta = 'storage/'. Auth::user()->cedula . Auth::user()->imagen)
              @endif
              <img src="{{asset($ruta)}}" class="img-circle">
            </div>
            <div class="box-footer">
              <form role="form" method="post" action="/perfil/actualiza" enctype="multipart/form-data" id='formUpdate'>
                {!! csrf_field()!!}

                <div class="row">
                  <div class="col-xs-12">
                    <div class="alert alert-danger" style="display:none; margin-top:10px;" id="error" >
                      <h4><i class="icon fa fa-ban"></i> Error</h4>
                        <ul id="listaErrores">

                        </ul>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group description-block col-md-12">
                    <div class="drag-drop">
                        <input type="file" multiple="multiple" id="foto" name="foto" accept="image/x-png,image/gif,image/jpeg"/>
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                            <i class="fa fa-circle fa-stack-1x top medium"></i>
                            <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                        </span>
                        <span class="desc" id="fotoVacio">Agregar foto</span>
                    </div>
                    <span class="desc" id="fotoLleno" style="display:none;">foto lleno. jpg</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                    <div class="form-group">
                      <label for="cedula">Cedula</label>
                      <input type="number" class="form-control" id="cedula" name="cedula" disabled>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="form-group">
                      <label for="nombres">Nombres</label>
                      <input type="text" class="form-control" id="nombres" name="nombres">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="form-group">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" class="form-control" id="apellidos" name="apellidos">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                    <div class="form-group">
                      <label for="fecha_nacimiento">Fecha Nacimiento</label>
                      <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="form-group">
                      <label for="telefono">Télefono</label>
                      <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="form-group">
                      <label for="email">Correo Electrónico</label>
                      <input type="text" class="form-control" id="email" name="email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="dep">Departamento</label>
                        <select name="dep" id="dep" class="form-control select2" style="width: 100%;">
                          <option value="0">seleccione departamento</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="ciu">Municipio</label>
                      <select name="ciu" id="ciu" class="form-control select2" style="width: 100%;">
                        <option value="0">seleccione departamento</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <button type="button" class="btn btn-block btn-danger btn-lg" data-toggle="modal" data-target="#modal-danger">Cambiar contraseña</button>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <button type="button" class="btn btn-block btn-danger btn-lg" id = "guardar">Guardar</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
@include('compartida.modalRojoPerfil')

@endsection
@section('js')

  <script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('js/perfil/cargaDatos.js')}}"></script>
  <script src="{{asset('js/combo.js')}}"></script>
  <script src="{{asset('js/inputFile/inputFile.js')}}"></script>
  <script src="{{asset('js/perfil/postEditar.js')}}"></script>

  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    $('#fecha_nacimiento').datepicker({
      autoclose: true,
      format: "dd/mm/yyyy",
      //7minViewMode: 2,
      maxViewMode: 2,
      multidate: false
    });
  });

  $(document).ready(function(){

      infDocente({{Auth::user()->cedula}});

  });

  </script>


@endsection
@include('plantillas.all.usuario')
