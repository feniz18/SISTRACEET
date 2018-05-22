<!-- /.box body -->
<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog modal-lg">
    <form role="form" id="formTransferencia" enctype="multipart/form-data">
      <div class="progress progress-lg active" id="cargaModal" style="display:none">
        <div id="progreso" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <span class="sr-only">0% Complete</span>
        </div>
      </div>
      {{--inicio header modal--}}
      {!! csrf_field()!!}

      <div class="modal-content" style="display:block" id='modalContenido'>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="false">&times;</span></button>
          <h4 class="modal-title"></h4>
        </div>
        {{--fin header modal--}}
        {{--inicio modal body--}}
        <div class="modal-body">
          <!-- formulario edicion-->

          <div class="row">
            <div class="col-xs-12">
              <div class="alert alert-warning alert-dismissible" style="display:none" id="errorModalTransferencia" >
                <h4><i class="icon fa fa-ban"></i>@lang('sistra.error')</h4>
                  <ul id="listaErrores">

                  </ul>
              </div>
            </div>

          </div>
          {{--inicio row--}}
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label>@lang('sistra.nombres')</label>
              <input name="nombreCurso" type="text" class="form-control" placeholder="Nombre Transferencia" id='nombreCurso'>
            </div>
          </div>
          {{--fin row--}}
          {{--inicio row--}}
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                <label>@lang('sistra.fechaInicio')</label>
                <input name = "fechaInicio" type="text" class="form-control datePicker" placeholder="Fecha inicio" id="fechaInicio">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                <label>@lang('sistra.fechaFin')</label>
                <input name = "fechaFinal" type="text" class="form-control datePicker" placeholder="Fecha Terminación" id='fechaFinal'>
              </div>
          </div>
            {{--fin row--}}
            {{--inicio row--}}
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 form-group" id="combo">
                <label>@lang('sistra.cupos')</label>
                <input name = "cupos" type="number" class="form-control" placeholder="Cupos transferencia" id='cupos'>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 form-group" id="combo">
                <label>@lang('sistra.sede')</label>
                <select name="sede" class="form-control" id="sede">
                  <option value="0" selected>@lang('sistra.seleccione')</option>
                  @foreach ($sede as $sedes)
                    <option value = "{{$sedes->id}}">{{$sedes->nombre}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            {{--fin row--}}
            {{--inicio row--}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 form-group" id="combo">
                  <label>@lang('sistra.especialidad')</label>
                  <select name="especialidad" class="form-control" id="especialidad">
                    <option value="">@lang('sistra.seleccione')</option>
                    @foreach ($especialidad as $esp)
                      <option value = "{{$esp->id}}">{{$esp->nombre}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 form-group" id="combo">
                    <label>@lang('sistra.observaciones')</label>
                    <textarea name="observaciones" id='observaciones' rows="4" cols="50" class="form-control" placeholder="Descripción de la transferencia"></textarea>
                  </div>
                </div>
              {{--fin row--}}
        </div>
        {{--fin modal body--}}
        {{--inicio modal footer--}}
        <div class="modal-footer">
          <button type="button" id="guardar" class="btn btn-outline"  style="display:none">@lang('sistra.guardar')</button>
          <button type="button" id="actualizar" class="btn btn-outline" style="display:none">@lang('sistra.actualizar')</button>
        </div>
        {{--fin modal footer--}}
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
