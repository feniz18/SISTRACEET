@extends('plantillas.general')
@section('titulo','Página de inicio')
@section('contenido')

  <div class="col-md-12">
    <div class="box box-solid">

      <!-- /.box-header -->
      <div class="box-body">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">

            @foreach ($noticias as $i =>$noticia)

              @if ($i == 0)

                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

              @else
                <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class=""></li>
              @endif

            @endforeach

          </ol>
          <div class="carousel-inner">

            @foreach ($noticias as $i =>$noticia)

              @if ($i == 0)

                <div class="item active">
                  <a href="">
                    <img src="{{'storage/noticia'. $noticia->id .$noticia->imagen}}" alt="{{$noticia->titulo}}" >
                  </a>

                  <div class="carousel-caption">
                    {{$noticia->titulo}}
                  </div>
                </div>

              @else
                <div class="item">
                  <a href="">
                    <img src="{{'storage/noticia'. $noticia->id .$noticia->imagen}}" alt="{{$noticia->titulo}}">
                  </a>

                  <div class="carousel-caption">
                    {{$noticia->titulo}}
                  </div>
                </div>
              @endif

            @endforeach
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
  @include('inicioModal')

@endsection
@section('js')
<script>
  $(window).on('load',function(){
    $('#modal-danger').modal('show');
  });
</script>

@endsection


{{--Esta plantila que aparece a continuacion incluye el usuario, rol y fotografia
--en las vistas
--}}

@include('plantillas.all.usuario')
