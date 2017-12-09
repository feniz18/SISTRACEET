@extends('plantillas.general')
@section('titulo','Noticia')
@section('seccion','Noticias')
@section('subseccion','Ver Noticias')
@section('css')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<!-- Theme style -->

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
              <div class="box-header text-center">
                <h3 class="box-title ">{{$noticia->titulo}}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <div class="col-md-12">

                  {!! $noticia->contenido !!}

                </div>

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

  <!-- FastClick -->
  <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
  {{--ajax a servidor --}}
<script>
$(window).on('load',function(){

    $('#carga').fadeOut(1000);
    $('#contenido').fadeIn(1000);

});

</script>


@endsection
