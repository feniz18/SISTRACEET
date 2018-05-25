@extends('plantillas.general')
@section('titulo',__("sistra.reporteLogs"))
@section('seccion',__("sistra.reportes"))
@section('subseccion',__("sistra.reporteLogs"))
@section('contenido')

  <div class="row">
    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header with-border">

          <h4>
            @lang("sistra.reporteUsuarioFecha")
          </h4>

        </div>
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
                <div class="alert alert-danger alert-dismissible" style="display:none" id="error" >
                  <h4><i class="icon fa fa-ban"></i> @lang("sistra.reporteUsuarioFecha")</h4>
                    <ul id="listaErrores">

                    </ul>
                </div>
              </div>
            </div>
          <form id="formReporte" method="post">
             {{ csrf_field() }}
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <label>@lang('sistra.fechaInicio')</label>
                <input type="text" name="fecha_inicio" class="form-control" id = 'fecha_inicio'>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                <label>@lang('sistra.fechaFin')</label>
                <input type="text" name="fecha_fin" class="form-control" id = 'fecha_fin'>
              </div>
            </div>
          </form>

          <div class="row">
            <div class="col-md-12 form-group">
              <a class="btn btn-warning" id='gReporte'>@lang('sistra.generarReporte')</a>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>



@endsection
@section('js')
  <script src="{{asset('js/reportes/log/postReporte.js')}}"></script>
  <script>
  $('#fecha_inicio,#fecha_fin').datepicker({
    format: "dd/mm/yyyy"
  });
  </script>

@endsection
@include('plantillas.all.usuario')

@section('reportes','active')
@section('reporteLog', 'active')
