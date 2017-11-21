@extends('plantillas.general')
@section('titulo','Administracion de Transferencias')
@section('seccion','Transferencias')
@section('subseccion','Administrar Transferencias')
@section('css')
<link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('css/checkbox/checkbox.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/timepicker/bootstrap-timepicker.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<!-- Theme style -->
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
</style>
@endsection
@section('contenido')


  <div class="callout callout-success" id="final" style="display:none">
    <h4><i class="icon fa fa-check"></i> Correcto</h4>
    <p id='parrafoFinal'><p>
  </div>

  <div class="progress progress-lg active" id="carga">
    <div id="progreso" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
      <span class="sr-only">0% Complete</span>
    </div>
  </div>

        <div class="row" id="contenido" style="display:none">
          <div class="col-xs-12 form-group">
            <button class="btn btn-warning" data-toggle="modal" data-target="#modal-danger">Crear transferencia</button>
          </div>
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Transferencias registradas en sistema</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <table id="tablaTransferencia" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre de la transferencia</th>
                      <th>Fecha inicio</th>
                      <th>Fecha fin</th>
                      <th>Hora inicio</th>
                      <th>Hora fin</th>
                      <th>Sede</th>
                      <th style="width: 40px">Editar</th>
                      <th style="width: 40px">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody id="docenteBody">

                    @foreach ($trans as $transferencia)
                    <tr class="text-center">
                      <td>
                        {{ $transferencia->id}}
                      </td>
                      <td>
                        {{ $transferencia->nombre}}
                      </td>
                      <td>
                        {{ $transferencia->fecha_inicio}}
                      </td>
                      <td>
                        {{ $transferencia->fecha_fin}}
                      </td>
                      <td>
                        {{ $transferencia->hora_inicio}}
                      </td>
                      <td>
                        {{ $transferencia->hora_fin}}
                      </td>
                      <td>
                        {{ $transferencia->sede_id}}
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" data-toggle="modal" data-target="#modal-danger" onclick="editTrans({{$transferencia->id}})" >
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


@endsection


{{--Esta plantila que aparece a continuacion incluye el usuario, rol y fotografia
--en las vistas
--}}

@include('plantillas.all.usuario')
@section('js')
  <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('admin/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
  {{--peticiones ajax al servidor--}}
  <script src="{{asset('js/transferencias/guardarTransferencia.js')}}"></script>
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
  </script>
@endsection
@section('transferecias','active')
@section('administrarTransferencias', 'active')
