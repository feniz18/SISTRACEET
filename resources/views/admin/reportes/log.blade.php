@extends('plantillas.general')
@section('titulo','Reportes Log')
@section('seccion','Reportes')
@section('subseccion','Reportes log')
@section('contenido')

  <div class="row">
    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header with-border">

          <h4>
            Reportes por fecha
          </h4>

        </div>
        <div class="box-body">
          <form class="" method="post">
             {{ csrf_field() }}
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <label>Fecha inicio</label>
                <input type="text" class="form-control" id = 'fecha_inicio'>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                <label>Fecha Fin</label>
                <input type="text" class="form-control" id = 'fecha_fin'>
              </div>
            </div>
          </form>

          <div class="row">
            <div class="col-md-12 form-group">
              <a class="btn btn-warning" href="/reportes/logs">Generar reporte</a>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>



@endsection
@section('js')
  <script>
  $('#fecha_inicio,#fecha_fin').datepicker({
    format: "dd/mm/yyyy"
  });
  </script>

@endsection
@include('plantillas.all.usuario')

@section('reportes','active')
@section('reporteLog', 'active')
