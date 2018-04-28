@extends('plantillas.general')
@section('titulo','Generar Carnet')
@section('seccion','Reportes')
@section('subseccion','Generacion Carnets')
@section('contenido')

  <div class="row">
    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header with-border">

          <h4>
            
          </h4>

        </div>
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
                <div class="alert alert-danger alert-dismissible" style="display:none" id="error" >
                  <h4><i class="icon fa fa-ban"></i> Corriga los errores:</h4>
                    <ul id="listaErrores">

                    </ul>
                </div>
              </div>
            </div>
          <form>
             {{ csrf_field() }}
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Ingrese numero de documento a exportar">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Buscar</button>
                    </span>
              </div>
          
          </form>

        </div>

      </div>

    </div>
  </div>



@endsection
@section('js')
  

@endsection
@include('plantillas.all.usuario')

@section('reportes','active')
@section('reporteCarnet', 'active')
