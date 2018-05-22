<!-- /.box body -->
<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog modal-lg">
    <form role="form" id="formUpdate" enctype="multipart/form-data">
      <div class="progress progress-lg active" id="cargaModal">
        <div id="progreso" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <span class="sr-only">0% Complete</span>
        </div>
      </div>

      {!! csrf_field()!!}
      <div class="modal-content" style="display:none" id='modalContenido'>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="false">&times;</span></button>
          <h4 class="modal-title">@lang('sistra.editar') @lang('sistra.usuario')</h4>
        </div>
        <div class="modal-body">
          <!-- formulario edicion-->

          <div class="row">
            <div class="col-xs-12">
              <div class="alert alert-warning alert-dismissible" style="display:none" id="error" >
                <h4><i class="icon fa fa-ban"></i> @lang('sistra.error')</h4>
                  <ul id="listaErrores">

                  </ul>
              </div>
            </div>
          </div>

            <input name="cedulaIni" type="hidden" id='cedulaIni'>


          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 form-group" >
              <label>@lang('sistra.cedula')</label>
              <input name="cedula" type="number" class="form-control cedula" placeholder="Cédula" id='cedula'>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 form-group">
              <label>@lang('sistra.fechaNacimiento')</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input name= "fecha_nacimiento" type="text" class="form-control pull-right fecha_nacimiento" id="datepicker" placeholder="dd/mm/yyyy">
              </div>
            </div>

          </div>
           <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>@lang('sistra.nombres')</label>
                  <input name = 'nombres' type="text" class="form-control nombres" placeholder="Nombres" id="nombres">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>@lang('sistra.apellidos')</label>
                  <input name = "apellidos" type="text" class="form-control apellidos" placeholder="Apellidos" id='apellidos'>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>@lang('sistra.telefono')</label>
                  <input name = 'telefono' type="number" class="form-control telefono" placeholder="Télefono" id="telefono">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>@lang('sistra.email')</label>
                  <input name = 'correo' type="email" class="form-control correo_electronico" placeholder="Correo Eléctronico" id="email">
                </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 form-group" id="combo">
                <label>@lang('sistra.departamento')</label>
                <select name="dep" class="form-control select2 departamento" style="width: 100%; height: 100%;" id="dep">
                    <option>@lang('sistra.seleccione')</option>
                </select>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                <label>@lang('sistra.ciudad')</label>
                <select name="ciu" class="form-control select2 ciudad" style="width: 100%; height: 100%;" id="ciu">
                  <option> @lang('sistra.seleccione')</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 form-group" id="combo">
                <label>@lang('sistra.especialidad')</label>
                <select name="especialidad" class="form-control select2" style="width: 100%; height: 100%;" id="especialidad">
                    <option value="">@lang('sistra.seleccione')</option>
                    @foreach($especialidad as $especialidades)
                      <option value='{{$especialidades->id}}'>{{$especialidades->nombre}}</option>
                    @endforeach
                </select>
              </div>
              @if(Auth::user()->rol_id == 'sadministrador')
              <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                <label>@lang('sistra.permisos')</label>
                <select name="rol" class="form-control" style="width: 100%; height: 100%;" id="rol">
                    <option value="">@lang('sistra.seleccione')</option>
                    <option value='administrador'>@lang('sistra.administrador')</option>
                    <option value='docente'>@lang('sistra.instructor')</option>
                </select>
              </div>
              @endif
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="enviar" class="btn btn-outline">@lang('sistra.actualizar')</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
