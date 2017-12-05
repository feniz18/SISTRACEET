@extends('plantillas.general')
@section('titulo','Administracion de instructores')
@section('seccion','Instructores')
@section('subseccion','Administrar instructores')
@section('css')
<link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('css/checkbox/checkbox.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/timepicker/bootstrap-timepicker.min.css')}}">
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
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Instructores registrados en sistema</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="docente" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Cedula</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Telefono</th>
                      <th>Horario</th>
                      <th style="width: 40px">Estado</th>
                      <th style="width: 40px">Editar</th>
                      <th style="width: 40px">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody id="docenteBody">

                    @foreach ($usuario as $instructor)
                    <tr class="text-center">
                      <td>
                        {{ $instructor->cedula}}
                      </td>
                      <td>
                        {{ $instructor->nombres}}
                      </td>
                      <td>
                        {{ $instructor->apellidos}}
                      </td>
                      <td>
                        {{ $instructor->telefono}}
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" href="{{'/instructor/horario/' . $instructor->cedula}}">
                          <i class='fa fa-fw fa-clock-o' style="color:green"></i>
                        </a>
                      </td>
                      <td>
                        @if($instructor->activo)
                          <a onClick="activaDocente({{$instructor->cedula}},1);" style="cursor:pointer;font-size:20px" id="{{$instructor->cedula}}"><i class='fa fa-check-square' style="color:green"></i></a>
                        @else
                          <a onClick="activaDocente({{$instructor->cedula}},0);" style="cursor:pointer;font-size:20px" id="{{$instructor->cedula}}"><i class='fa fa-square-o' style="color:red"></i>
                        @endif
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" data-toggle="modal" data-target="#modal-danger" onclick="infDocente({{$instructor->cedula}})" >
                          <i class='fa fa-folder-open' style="color:green"></i>
                        </a>
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" value="{{$instructor->cedula}}" class="borrar">
                          <i class='fa fa-fw fa-times' style="color:red"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach

                  <tbody>
                    @include('admin.docente.modalRojo')
                </table>
              </div>

            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          </div>
      <!-- /.col -->
      </div>
    <!-- /.row -->


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
  <!-- Select2 -->
  <script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('admin/plugins/timepicker/bootstrap-timepicker.min.js')}}">

  </script>
  {{--peticiones ajax al servidor--}}
  <script src="{{asset('js/docentes/administraDocentes.js')}}"></script>
  <script src="{{asset('js/combo.js')}}"></script>
  <script src="{{asset('js/docentes/postEditDocente.js')}}"></script>
  <script src="{{asset('js/docentes/activaDocentes.js')}}"></script>
  <script src="{{asset('js/docentes/eliminaDocente.js')}}"></script>

  <script>


  $(window).on('load',function(){

      $('#carga').fadeOut(1000);
      $('#contenido').fadeIn(1000);

  });

  </script>
  <script>

    $(function () {
      $('#docente').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : true,
          "dom": '<"top"fl>rt<"bottom" p><"clear" i>'

      });
    });
    $('.select2').select2();
    $('#datepicker').datepicker({
      autoclose: true,
      format: "dd/mm/yyyy"
    });
    $('.timepicker').timepicker({
      showInputs: false,
      defaultTime: false
    });
  </script>
@endsection
@section('docentes','active')
@section('administrarDocentes', 'active')
