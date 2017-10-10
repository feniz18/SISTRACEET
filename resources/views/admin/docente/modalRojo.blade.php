<!-- /.box body -->
<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog modal-lg">
    <form role="form" id="formUpdate">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="false">&times;</span></button>
          <h4 class="modal-title">Editar Usuario</h4>
        </div>
        <div class="modal-body">
          <!-- formulario edicion-->
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 form-group" >
              <label>Cédula</label>
              <input type="number" class="form-control cedula" placeholder="Cédula" id='cedula'>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 form-group">
              <label>Fecha Nacimiento</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right fecha_nacimiento" id="datepicker" placeholder="dd/mm/yyyy">
              </div>
            </div>

          </div>
           <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>Nombres</label>
                  <input type="text" class="form-control nombres" placeholder="Nombres" id="nombres">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>Apellidos</label>
                  <input type="text" class="form-control apellidos" placeholder="Apellidos" id='apellidos'>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>Télefono</label>
                  <input type="number" class="form-control telefono" placeholder="Télefono" id="telefono">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                  <label>Correo Eléctronico</label>
                  <input type="email" class="form-control correo_electronico" placeholder="Correo Eléctronico" id="email">
                </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                <label>Departamento</label>
                <select class="form-control select2 departamento" style="width: 100%; height: 100%;" id="dep">
                  @foreach ($departamento as $departamentos)
                    <option>{{$departamentos->nombre}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                <label>Ciudad</label>
                <select class="form-control select2 ciudad" style="width: 100%; height: 100%;" id="ciu">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="enviar" class="btn btn-outline">Actualizar cambios</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
