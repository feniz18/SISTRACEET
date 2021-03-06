@extends('plantillas.general')
@section('titulo',__('sistra.administrarInstructores'))
@section('seccion',__("sistra.horarioInstructor"))
@section('subseccion',__("sistra.instructor"). $usuario->nombres . " " . $usuario->apellidos)
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
    <h4><i class="icon fa fa-check"></i>@lang('sistra.correcto')</h4>
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
                  @lang('sistra.regresar')
                </a>
                <div class="pull-right">
                  <a class="btn btn-warning" data-toggle="modal" data-target="#modal-danger" id="nuevoHorario">
                    @lang('sistra.nuevoHorario')
                  </a>
                </div>
              </div>
            </div>
            {{--fin row botones--}}
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">@lang('sistra.editarUsuarioHorario') CC {{$usuario->cedula}} - {{$usuario->nombres}} {{$usuario->apellidos}}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="docente" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>@lang('sistra.diaSemana')</th>
                      <th>@lang('sistra.horaInicio')</th>
                      <th>@lang('sistra.horaFin')</th>
                      <th style="width: 40px">@lang('sistra.eliminar')</th>
                    </tr>
                  </thead>
                  <tbody id="docenteBody">
                    @foreach ($usuario->horario->sortBy('id') as $instructor)
                      @php
                        $formato_in = 'H:i:s';
                        $formato_out = 'h:i A';
                        $hora_inicio = Carbon\Carbon::createFromFormat($formato_in,$instructor->pivot->hora_inicio);
                        $hora_inicio = $hora_inicio->format($formato_out);
                        $hora_fin = Carbon\Carbon::createFromFormat($formato_in,$instructor->pivot->hora_fin);
                        $hora_fin = $hora_fin->format($formato_out);
                      @endphp
                    <tr class="text-center">
                      <td>
                        {{ $instructor->descripcion}}
                      </td>
                      <td>
                        {{ $hora_inicio}}
                      </td>
                      <td>
                        {{ $hora_fin}}
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" value="{{$instructor->pivot->id}}" class="borrar">
                          <i class='fa fa-fw fa-times' style="color:red"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
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
  <script src={{asset('js/docentes/horario/guarda.js')}}></script>
  <script src={{asset('js/docentes/horario/elimina.js')}}></script>
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
