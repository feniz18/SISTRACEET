@extends('plantillas.general')
@section('titulo','Ver cursos')
@section('seccion','Cursos')
@section('subseccion','Cursos en los que se encuentra inscrito')
@section('css')

<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

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
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">@lang('sistra.cursoInscrito')</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <table id="tablaTransferencia" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>@lang('sistra.nombres')</th>
                      <th>@lang('sistra.fechaInicio')</th>
                      <th>@lang('sistra.fechaFin')</th>
                      <th>@lang('sistra.sede')</th>
                      <th>@lang('sistra.direccion')</th>
                      <th>@lang('sistra.horario')</th>
                      <th>@lang('sistra.desCertificado')</th>
                    </tr>
                  </thead>
                  <tbody id="docenteBody">

                    @foreach ($trans as $transferencia)

                      @php
                        $transferencia->fecha_inicio = Carbon\Carbon::createFromFormat("Y-m-d", $transferencia->fecha_inicio)->format("d/m/Y");
                        $transferencia->fecha_fin = Carbon\Carbon::createFromFormat("Y-m-d", $transferencia->fecha_fin)->format("d/m/Y");
                      @endphp

                    <tr class="text-center" id='filaTabla'>
                      <td>
                        {{$transferencia->id}}
                      </td>
                      <td>
                        {{$transferencia->nombre}}
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
                        @foreach ($transferencia->horario->sortBy('id') as $horario)
                          {{$horario->descripcion}} : {{$horario->pivot->hora_inicio}} a {{$horario->pivot->hora_fin}} </br>
                        @endforeach
                      </td>
                      <td>
                        @php
                          $usuarioTran = App\UsuarioTransferencia::where("transferencia_id",$transferencia->id)->where("usuario_id",Auth::user()->cedula)->first();
                        @endphp
                        
                        @if($usuarioTran->aprobacion)
                          <a class="btn btn-app" href="{{'/certificado/' . Auth::user()->cedula .'/'. $transferencia->id }}">
                            <i class="fa fa-save"></i>
                              Guardar
                          </a>
                        @endif
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
  {{--peticiones ajax al servidor--}}

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

  </script>
@endsection
@section('cursos','active')
@section('verCursos', 'active')
