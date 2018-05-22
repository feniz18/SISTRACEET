<!-- /.box body -->
<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog modal-lg">
    <form role="form" id="modalformulario">

      {!! csrf_field()!!}

      <div class="modal-content" style="display:block" id='modalContenido'>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="false">&times;</span></button>
          <h4 class="modal-title"></h4>
        </div>

        {{--modal body--}}
        <div class="modal-body">
          <!-- formulario edicion-->
          {{--barra de manejo de errores --}}
          <div class="row">
            <div class="col-xs-12">
              <div class="alert alert-warning alert-dismissible" style="display:none" id="error" >
                <h4><i class="icon fa fa-ban"></i>@lang('sistra.error')</h4>
                  <ul id="listaErrores">

                  </ul>
              </div>
            </div>
          </div>
          {{--fin barra manejo de errores --}}
          {{--inicio contenido formulario--}}
           <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>@lang('sistra.nombres')</label>
                  <input name = "nombre" type="text" class="form-control" placeholder="Nombre" id='nombre'>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>@lang('sistra.direccion') </label>
                  <input name = "direccion" type="text" class="form-control" placeholder="Direccion" id='direccion'>
                </div>
            </div>
          {{--fin contenido formulario--}}
        </div>
        {{--fin modal body--}}
        <div class="modal-footer">
          <button type="button" id="enviar" class="btn btn-outline">@lang('sistra.guardar')</button>
          <button type="button" id="actualizar" class="btn btn-outline" style='display:none'>@lang('sistra.actualizar')</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
