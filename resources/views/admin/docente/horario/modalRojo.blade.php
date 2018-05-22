<!-- /.box body -->
<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog modal-lg">
    <form role="form" id="formUpdate">
      <div class="progress progress-lg active" id="cargaModal">
        <div id="progreso" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <span class="sr-only">0% Complete</span>
        </div>
      </div>
      <input type="hidden" name="cedula" value="{{$usuario->cedula}}">
      {!! csrf_field()!!}
      <div class="modal-content" style="display:block" id='modalContenido'>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="false">&times;</span></button>
          <h4 class="modal-title">@lang('sistra.horarioInstructor') {{$usuario->nombres}} {{$usuario->apellidos}}</h4>
        </div>
        <div class="modal-body">
          <!-- formulario edicion-->
          {{--control de errores--}}
          <div class="row">
            <div class="col-xs-12">
              <div class="alert alert-warning alert-dismissible" style="display:none" id="error" >
                <h4><i class="icon fa fa-ban"></i>@lang("error")</h4>
                  <ul id="listaErrores">

                  </ul>
              </div>
            </div>
          </div>
          {{--fin control de errores--}}

          {{--inicio row--}}
          <div class="row">
            <div class="col-md-12 form-group">
              <label>@lang('sistra.diaSemana')</label>
              <select name='dia' class="form-control">
                <option value=''>@lang('sistra.seleccione')</option>
                @foreach ($semana as $dias)
                  <option value='{{$dias->id}}'>{{$dias->descripcion}}</option>
                @endforeach
              </select>
            </div>
          </div>
          {{--fin row--}}
          {{--inicio row--}}
          <div class="row">

          {{--inicio time picker--}}

            <div class="col-xs-12 col-sm-6 col-md-6 form-group">
              <!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>@lang('sistra.horaInicio')</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name='hora_inicio' id="hora_inicio">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
            </div>
            {{--fin time picker--}}

            {{--inicio time picker--}}
            <div class="col-xs-12 col-sm-6 col-md-6 form-group">
              <!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>@lang("sistra.horaFin")</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name='hora_fin' id="hora_fin">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
            </div>
            {{--fin time picker--}}
          </div>
          {{--fin row--}}
        </div>
        <div class="modal-footer">
          <button type="button" id="guardar" class="btn btn-outline">@lang('sistra.guardar')</button>
        </div>
      </div>
    <!-- /.modal-content -->
    </form>
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
