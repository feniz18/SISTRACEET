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
          <div class="col-md-5">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Integrantes Sistraceet</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <div class="box box-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-red-active">
                    <h3 class="widget-user-username">lUIS AGUSTIN BLANCO</h3>
                    <h5 class="widget-user-desc">TECNOLOGO ADSI</h5>
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" src="{{ asset('img/integrantes/luis.jpeg') }}" alt="User Avatar">
                  </div>
                  <div class="box-footer">
                    <div class="row">
                      <div class="col-sm-12 border-right">
                        <div class="description-block" style="text-align: justify;">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                </div>

              </div>

            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-7">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Información detallada</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="http://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap" alt="First slide">

                            <div class="carousel-caption">
                              First Slide
                            </div>
                          </div>
                          <div class="item">
                            <img src="http://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">

                            <div class="carousel-caption">
                              Second Slide
                            </div>
                          </div>
                          <div class="item">
                            <img src="http://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">

                            <div class="carousel-caption">
                              Third Slide
                            </div>
                          </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                          <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                          <span class="fa fa-angle-right"></span>
                        </a>
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
