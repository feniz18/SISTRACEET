@extends('plantillas.general')
@section('titulo','Administracion de Transferencias')
@section('seccion','Transferencias')
@section('subseccion','Administrar Transferencias')
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('css/checkbox/checkbox.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/timepicker/bootstrap-timepicker.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<!-- Theme style -->
<!-- Checkbox personalizados-->
<link rel="stylesheet" href="{{asset('css/checkbox/checkbox.css')}}">
<style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
    .bootstrap-timepicker-widget{
      color:black;
    }
    .selecciona
    {
      background-color:#FCB8A9;
    }
</style>
@endsection
@section('contenido')


  <div class="callout callout-success" id="final" style="display:none">
    <h4><i class="icon fa fa-check"></i> @lang('sistra.correcto')</h4>
    <p id='parrafoFinal'><p>
  </div>

  <div class="progress progress-lg active" id="carga">
    <div id="progreso" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
      <span class="sr-only">0% Complete</span>
    </div>
  </div>

        <div class="row" id="contenido" style="display:none">
          <div class="col-xs-12 form-group">
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" id="crearTransferencia">@lang('sistra.crearTransferencia')</button>
            <button class="btn btn-success" id="btn-inscripcion">@lang('sistra.inscribirTransferencia')</button>
            <button class="btn btn-warning" id="btn-cert">@lang('sistra.certificarUsuarios')</button>
            <button class="btn btn-primary pull-right" id="btn-correo">@lang('sistra.transferenciaSistema')</button>
          </div>
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <table id="tablaTransferencia" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>@lang('sistra.nombres')</th>
                      <th>@lang('sistra.cupos')</th>
                      <th>@lang('sistra.fechaInicio')</th>
                      <th>@lang('sistra.fechaFin')</th>
                      <th>@lang('sistra.sede')</th>
                      <th>@lang('sistra.direccion')</th>
                      <th style="width: 40px">@lang('sistra.horario')</th>
                      <th style="width: 40px">@lang('sistra.editar')</th>
                      <th style="width: 40px">@lang('sistra.eliminar')</th>
                    </tr>
                  </thead>
                  <tbody id="docenteBody">

                    @foreach ($trans as $transferencia)

                      @php
                        $transferencia->fecha_inicio = Carbon\Carbon::createFromFormat("Y-m-d", $transferencia->fecha_inicio)->format("d/m/Y");
                        $transferencia->fecha_fin = Carbon\Carbon::createFromFormat("Y-m-d", $transferencia->fecha_fin)->format("d/m/Y");
                      @endphp

                    <tr class="text-center" id='filaTabla'>
                      <td id='idTransferencia' value='{{$transferencia->id}}'>
                        {{$transferencia->id}}
                      </td>
                      <td>
                        {{$transferencia->nombre}}
                      </td>
                      <td id='transferenciaCupo' value='{{$transferencia->cupos}}'>
                        {{$transferencia->cupos}}
                      </td>
                      <td>
                        {{$transferencia->fecha_inicio}}
                      </td>
                      <td>
                        {{$transferencia->fecha_fin}}
                      </td>
                      <td>
                        {{$transferencia->sede->nombre}}
                      </td>
                      <td>
                        {{$transferencia->sede->direccion}}
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" href="{{'/transferencia/horario/' . $transferencia->id}}">
                          <i class='fa fa-fw fa-clock-o' style="color:green"></i>
                        </a>
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" data-toggle="modal" data-target="#modal-danger" id="{{$transferencia->id}}" class="editar">
                          <i class='fa fa-folder-open' style="color:green"></i>
                        </a>
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" value="{{$transferencia->id}}" class="borrar">
                          <i class='fa fa-fw fa-times' style="color:red"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach

                  <tbody>
                </table>
              </div>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          </div>
      <!-- /.col -->
      </div>
    <!-- /.row -->
    @include('admin.transferencia.modalRojo')
    @include('admin.transferencia.modalInscripcion')


@endsection


{{--Esta plantila que aparece a continuacion incluye el usuario, rol y fotografia
--en las vistas
--}}

@include('plantillas.all.usuario')
@section('js')
  <script src="{{asset('jquery/js.cookie.js')}}"></script>
  <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('admin/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
  {{--peticiones ajax al servidor--}}
  <script src="{{asset('js/transferencias/guardarTransferencia.js')}}"></script>
  <script src="{{asset('js/transferencias/cargaTransferencia.js')}}"></script>
  <script src="{{asset('js/transferencias/actualizarTransferencia.js')}}"></script>
  <script src="{{asset('js/transferencias/borrarTransferencia.js')}}"></script>
  <script src="{{asset('js/transferencias/seleccionar.js')}}"></script>
  <script src="{{asset('js/transferencias/inscripcion/cargaDatos.js')}}"></script>
  <script src="{{asset('js/transferencias/inscripcion/enviarInscripcion.js')}}"></script>
  <script src="{{asset('js/transferencias/inscripcion/enviaCorreo.js')}}"></script>

  <script>

  $(window).on('load',function(){

      $('#carga').fadeOut(1000);
      $('#contenido').fadeIn(1000);

  });

  </script>
  <script>

  $(function () {
    $('#tablaTransferencia').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true,
      "dom"         : '<"top"fl>rt<"bottom" p><"clear" i>'

    });
  });
  $('.timepicker').timepicker({
    showInputs: false,
    defaultTime: false
  });
  $('.datePicker').datepicker({
    format: "dd/mm/yyyy",
    autoclose: true,
  });
  </script>
@endsection
@section('transferecias','active')
@section('administrarTransferencias', 'active')
