@extends('plantillas.general')
@section('titulo','Administracion de instructores')
@section('seccion','Editar horario')
@section('subseccion','Instructor '. $usuario->nombres . " " . $usuario->apellidos)
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
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
            {{--row botones--}}
            <div class="row">
              <div class="col-md-12 form-group">
                <a class="btn btn-danger" href="/administraDocentes">
                  <i class="fa fa-fw fa-caret-left"></i>
                  Regresar
                </a>
                <div class="pull-right">
                  <a class="btn btn-warning" data-toggle="modal" data-target="#modal-danger">
                    Nuevo horario
                  </a>
                </div>
              </div>
            </div>
            {{--fin row botones--}}
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Editar horario usuario: CC {{$usuario->cedula}} - {{$usuario->nombres}} {{$usuario->apellidos}}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="docente" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Dia semana</th>
                      <th>hora inicio</th>
                      <th>hora fin</th>
                      <th style="width: 40px">Editar</th>
                      <th style="width: 40px">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody id="docenteBody">

                    {{--@foreach ($usuario as $instructor)
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
--}}
                  <tbody>
                    @include('admin.docente.horario.modalRojo')
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
  <script src={{asset('js/docentes/horario/guarda.js')}}>

  </script>
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
        'searching'   : false,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : true,
          "dom": '<"top"fl>rt<"bottom" p><"clear" i>'

      });
    });
    $('.timepicker').timepicker({
      showInputs: false,
      defaultTime: false
    });
  </script>
@endsection
@section('docentes','active')
@section('administrarDocentes', 'active')
