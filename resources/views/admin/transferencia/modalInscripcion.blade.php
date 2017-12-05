<!-- /.box body -->
<div class="modal modal-success fade" id="modal-success">
  <div class="modal-dialog modal-lg">
    <form role="form" id="formTransferencia" enctype="multipart/form-data">
      <div class="progress progress-lg active" id="cargaModalRegistraTrans" style="display:none">
        <div id="progreso" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <span class="sr-only">0% Complete</span>
        </div>
      </div>
      {{--inicio header modal--}}
      {!! csrf_field()!!}

      <div class="modal-content" style="display:block" id='modalContenidoRegistraTrans'>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="false">&times;</span></button>
          <h4 class="modal-title">Registrar usuarios transferencia: Usuarios disponibles</h4>
        </div>
        {{--fin header modal--}}
        {{--inicio modal body--}}
        <div class="modal-body">
          <div class="table-responsive no-padding">
            <table class="table" id="tablaSeleccionInstructores">
              <thead>
                <tr>
                  <th style="width:10px;">Sel</th>
                  <th>Cedula</th>
                  <th>Nombres y apellidos</th>
                </tr>
              </thead>
              <tbody id="modalBodyRegistraTrans">
                <tr>
                </tr>
            </tbody>
            </table>
          </div>
        </div>
        {{--fin modal body--}}
        {{--inicio modal footer--}}
        <div class="modal-footer">
          <button type="button" id="registrar" class="btn btn-outline"  style="display:none">Inscribir Usuarios</button>
        </div>
        {{--fin modal footer--}}
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
