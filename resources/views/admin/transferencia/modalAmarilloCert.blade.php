<!-- /.box body -->
<div class="modal modal-warning fade" id="modal-warning">
  <div class="modal-dialog modal-lg">
    <form role="form" id="formTransferencia" enctype="multipart/form-data">
      <div class="progress progress-lg active" id="cargaModalCert" style="display:block">
        <div id="progreso" class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <span class="sr-only">0% Complete</span>
        </div>
      </div>
      {{--inicio header modal--}}
      {!! csrf_field()!!}

      <div class="modal-content" style="display:none" id='modalContenidoCert'>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="false">&times;</span></button>
          <h4 class="modal-title">@lang('sistra.certificarUsuarios')</h4>
        </div>
        {{--fin header modal--}}
        {{--inicio modal body--}}
        <div class="modal-body">
          <div class="table-responsive no-padding">
            <table class="table" id="tablaSeleccionCert">
              <thead>
                <tr>
                  <th style="width:60px">Sel</th>
                  <th>@lang('sistra.cedula')</th>
                  <th>@lang('sistra.nombresApellidos')</th>
                </tr>
              </thead>
              <tbody id="modalBodyCertTrans">
              </tbody>
            </table>
          </div>
        </div>
        {{--fin modal body--}}
        {{--inicio modal footer--}}
      
        {{--fin modal footer--}}
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
