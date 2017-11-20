<!-- /.box body -->
<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog modal-lg">
    <form role="form" id="formUpdate" enctype="multipart/form-data">
      <div class="progress progress-lg active" id="cargaModal">
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
              <div class="alert alert-warning alert-dismissible" style="display:none" id="error" >
                <h4><i class="icon fa fa-ban"></i> Error</h4>
                  <ul id="listaErrores">

                  </ul>
              </div>
            </div>

          </div>
          {{--inicio row--}}
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label>Nombre Transferencia</label>
              <input name="nombreCurso" type="text" class="form-control" placeholder="Nombre Transferencia" id='nombreCurso'>
            </div>
          </div>
          {{--fin row--}}
          {{--inicio row--}}
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                <label>Fecha Inicio</label>
                <input name = "fechaInicio" type="text" class="form-control" placeholder="Fecha inicio" id="fechaInicio">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                <label>Fecha Terminación</label>
                <input name = "fechaFinal" type="text" class="form-control apellidos" placeholder="Fecha Terminación" id='fechaFinal'>
              </div>
          </div>
            {{--fin row--}}
            {{--inicio row--}}
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 form-group" id="combo">
                <label>Cupos</label>
                <input name = "cupos" type="number" class="form-control" placeholder="Cupos transferencia" id='cupos'>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 form-group" id="combo">
                <label>Sede</label>
                <select name="sede" class="form-control" id="sede">
                  <option value="0" selected>Seleccione sede</option>
                  @foreach ($sede as $sedes)
                    <option value = "{{$sedes->id}}">{{$sedes->nombre}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            {{--fin row--}}
            <div class="col-xs-12 form-group text-center">
              <h4>Dias de la transferencia</h4>
            </div>

            {{--inicio row--}}
            <div class="row" id='check-dias'>
              {{--inicio controles --}}
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 form-group" >
                  <input type="checkbox" id="chulo-1" name='chulo-1'>
                  <label for="chulo-1">LUNES</label>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 form-group">
                  <input type="checkbox" id="chulo-2" name='chulo-2'>
                  <label for="chulo-2">MARTES</label>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 form-group">
                  <input type="checkbox" id="chulo-3" name='chulo-3'>
                  <label for="chulo-3">MIERCOLES</label>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 form-group">
                  <input type="checkbox" id="chulo-4" name='chulo-4'>
                  <label for="chulo-4">JUEVES</label>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 form-group">
                  <input type="checkbox" id="chulo-5" name='chulo-5'>
                  <label for="chulo-5">VIERNES</label>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 form-group">
                  <input type="checkbox" id="chulo-6" name='chulo-6'>
                  <label for="chulo-6">SABADO</label>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 form-group">
                  <input type="checkbox" id="chulo-7" name='chulo-7'>
                  <label for="chulo-7">DOMINGO</label>
              </div>
              {{--inicio controles --}}
            </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 form-group">
              <!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Hora inicio</label>

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

            <div class="col-xs-12 col-sm-6 col-md-6 form-group">
              <!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Hora de finalización</label>

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
          </div>
        </div>
        {{--fin modal body--}}
        {{--inicio modal footer--}}
        <div class="modal-footer">
          <button type="button" id="guardar" class="btn btn-outline">Guardar</button>
          <button type="button" id="actualizar" class="btn btn-outline" style="display:none">Actualizar</button>
        </div>
        {{--fin modal footer--}}
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
