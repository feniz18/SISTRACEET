<!-- /.box body -->
<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog modal-sm">
    <form  role="form" id="formUpdateContrasena">
      <div class="progress progress-lg active" id="cargaModal" style="display:none">
        <div id="progreso" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <span class="sr-only">0% Complete</span>
        </div>
      </div>

      {!! csrf_field()!!}
      <div class="modal-content" id='modalContenido'>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="false">&times;</span></button>
          <h4 class="modal-title">Editar Contraseña</h4>
        </div>
        <div class="modal-body">
          <!-- formulario edicion-->

          <div class="callout callout-success" id="modalFinal" style="display:none">
            <h4><i class="icon fa fa-check"></i> Correcto</h4>
            <p id='parrafoFinal'>Contraseña actualizada correctamente<p>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <div class="alert alert-warning alert-dismissible" style="display:none" id="modalError" >
                <h4><i class="icon fa fa-ban"></i> Error</h4>
                  <ul id="modalListaErrores">

                  </ul>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 form-group" >
              <label>Contraseña antigua</label>
              <input name="contrasenaOld" type="password" class="form-control" placeholder="Contraseña" id='contrasenaOld'>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label>Contraseña nueva</label>
              <input name="contrasena" type="password" class="form-control" placeholder="Contraseña" id='contrasena'>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label>Repita su Contraseña</label>
              <input name="rcontrasena" type="password" class="form-control" placeholder="Contraseña" id='rcontrasena'>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="modalGuardar" class="btn btn-outline">Guardar Contraseña</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
