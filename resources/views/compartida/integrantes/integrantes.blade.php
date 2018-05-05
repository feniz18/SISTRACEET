@extends('plantillas.general')
@section('titulo','Integrantes proyecto SISTRA')
@section('css')
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

  <section class="content-header">
      <h1>
        @yield('seccion')
        <small>@yield('subseccion')</small>
      </h1>
  </section>


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
          <div class="col-md-6">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Instructores registrados en sistema</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
               
              </div>

            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Instructores registrados en sistema</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                     
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
en las vistas
--}}

@include('plantillas.all.usuario')
@section('js')
  
  <!-- FastClick -->
  <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <script>


  $(window).on('load',function(){

      $('#carga').fadeOut(1000);
      $('#contenido').fadeIn(1000);

  });

  </script>
  
@endsection
@section('docentes','active')
@section('administrarDocentes', 'active')
