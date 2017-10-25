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
      <div class="modal-content" style="display:block" id='modalContenido'>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="false">&times;</span></button>
          <h4 class="modal-title"></h4>
        </div>
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

            <input name="cedulaIni" type="hidden" id='cedulaIni'>


          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 form-group" style="display:none;" >
              <label>Id</label>
              <input name="id" type="number" class="form-control" placeholder="Id" id='id' disabled>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 form-group" style="display:none;" >
              <label>Nombre Curso</label>
              <input name="nombreCurso" type="text" class="form-control" placeholder="Nombre curso" id='nombreCurso'>
            </div>
          </div>
           <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>Fecha Inicio</label>
                  <input name = "fechaInicio" type="text" class="form-control" placeholder="Nombres" id="fechaInicio">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>Fecha Terminación</label>
                  <input name = "fechaFinal" type="text" class="form-control apellidos" placeholder="Fecha Terminación" id='fechaFinal'>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>Hora de inicio</label>
                  <input name = 'horaInicio' type="text" class="form-control" placeholder="Hora inicio" id="horaInicio">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>Hora de finalización</label>
                  <input name = 'horaFin' type="text" class="form-control" placeholder="Hora fin" id="horaFin">
                </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 form-group" id="combo">
                <label>Departamento</label>
                <select name="dep" class="form-control select2 departamento" style="width: 100%; height: 100%;" id="dep">
                    <option value="">SENA COLOMBIA</option>
                </select>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="enviar" class="btn btn-outline">Actualizar cambios</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
