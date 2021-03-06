@extends('plantillas.general')
@section('titulo',__("sistra.administraSedes"))
@section('seccion',__("sistra.sede"))
@section('subseccion',__("sistra.administraSedes"))
@section('css')
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
          <div class="col-xs-12 form-group">
            <button class="btn btn-warning" data-toggle="modal" data-target="#modal-danger" id='btnCrearSede'>@lang('sistra.crearSede')</button>
          </div>
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">@lang('sistra.sedesRegistrada')</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="docente" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>@lang('sistra.nombres')</th>
                      <th>@lang('sistra.direccion')</th>
                      <th style="width: 40px">@lang('sistra.editar')</th>
                      <th style="width: 40px">@lang('sistra.eliminar')</th>
                    </tr>
                  </thead>
                  <tbody id="tablaCuerpo">

                    @foreach ($sedes as $sede)
                    <tr class="text-center">
                      <td>
                        {{ $sede->nombre}}
                      </td>
                      <td>
                        {{ $sede->direccion}}
                      </td>
                      <td>
                        <a class="editar" style="cursor:pointer;font-size:20px" data-toggle="modal" data-target="#modal-danger" id="{{$sede->id}}" >
                          <i class='fa fa-folder-open' style="color:green"></i>
                        </a>
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" value="{{$sede->id}}" class="borrar">
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
    @include('admin.sedes.modalRojo')


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
  {{--ajax a servidor --}}
  <script src="{{asset('js/sedes/agregaSedes.js')}}" ></script>
  <script src="{{asset('js/sedes/cargaDatosEditar.js')}}" ></script>
  <script src="{{asset('js/sedes/actualizaSede.js')}}" ></script>
  <script src="{{asset('js/sedes/eliminarSede.js')}}"></script>

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

      })
    })

  </script>
@endsection
@section('sedes','active')
@section('administrarSedes', 'active')
