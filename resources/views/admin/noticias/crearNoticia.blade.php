@extends('plantillas.general')
@section('titulo','Noticias')
@section('seccion','Noticias')
@section('subseccion','Nueva noticia')
@section('css')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">


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
                <h3 class="box-title">Creacion nueva noticia</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                @if($errors->any())
                  <div class="alert alert-danger" role="alert">
                      <p> Por favor corriga los errores </p>
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                      </ul>
                  </div>
                @endif
                <form enctype="multipart/form-data" method="post" action="/guardar/noticias">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="col-md-12 form-group">
                    <label>Titulo de la noticia</label>
                    <input type="text" name="titulo" class="form-control" id='titulo' value="{{old('titulo')}}">
                  </div>
                  <div class="col-md-12 form-group">
                    <label>Imagen</label>
                    <input name="imagenNoticia" type="file" />
                  </div>
                  <div class="col-md-12 pad">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="contenido" value="{{old('titulo')}}"></textarea>
                  </div>

                  <div class="col-md-12 form-group">
                    <input type="submit" class="btn btn-danger pull-right"/>
                    <a class="btn btn-danger" href="/administraNoticias">Regresar</a>
                  </div>

                </form>
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
  <script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  {{--ajax a servidor --}}

  <script>
  $(function()
  {
      $('.textarea').wysihtml5();
  });

  $(window).on('load',function(){

      $('#carga').fadeOut(1000);
      $('#contenido').fadeIn(1000);

  });

  </script>
@endsection
@section('noticias','active')
@section('noticiasBanner', 'active')
