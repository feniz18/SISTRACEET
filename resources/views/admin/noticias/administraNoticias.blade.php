@extends('plantillas.general')
@section('titulo',__("sistra.administracionNoticia"))
@section('seccion',__("sistra.administracionNoticia"))
@section('subseccion',__("sistra.noticias"))
@section('css')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<!-- Theme style -->

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
            <a class="btn btn-warning" href="/crearNoticias">@lang("sistra.crearNoticia")</a>
          </div>
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">@lang("sistra.noticiasRegistradas")</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="docente" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>@lang("sistra.tituloNoticia")</th>
                      <th>@lang("sistra.fechaPublicacion")</th>
                      <th>@lang("sistra.activar")</th>
                      <th style="width: 40px">@lang("sistra.eliminar")</th>
                    </tr>
                  </thead>
                  <tbody id="tablaCuerpo">

                    @foreach ($noticias as $noticia)
                    <tr class="text-center">
                      <td>
                        {{$noticia->titulo}}
                      </td>
                      <td>
                        {{$noticia->created_at}}
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" href="/guardar/noticias/activar/{{$noticia->id}}">
                          @if ($noticia->activo == false)
                            Activar
                          @else
                            Inactivar
                          @endif
                        </a>
                      </td>
                      <td>
                        <a style="cursor:pointer;font-size:20px" href="/guardar/noticias/eliminar/{{$noticia->id}}">
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
          "dom": '<"top"fl>rt<"bottom" p><"clear" i>',
      });
    });
  </script>
@endsection
@section('noticias','active')
@section('noticiasBanner', 'active')
