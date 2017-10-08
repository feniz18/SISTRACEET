@extends('plantillas.general')
@section('titulo','INICIO SISTRA CEET')
@section('contenido')

  <div class="col-md-12">
    <div class="box box-solid">

      <!-- /.box-header -->
      <div class="box-body">
        
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

@endsection


{{--Esta plantila que aparece a continuacion incluye el usuario, rol y fotografia
--en las vistas
--}}

@include('plantillas.all.usuario')
