@extends('plantillas.general')
@section('titulo','Administracion de instructores')
@section('seccion','Instructores')
@section('subseccion','Administrar instructores')
@section('css')
<style>
  .example-modal .modal {
    position: relative;
    top: auto;
    bottom: auto;
    right: auto;
    left: auto;
    display: block;
    z-index: 1;
  }

  .example-modal .modal {
    background: transparent !important;
  }
</style>
@endsection
@section('contenido')

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Hover Data Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Cedula</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Telefono</th>
                      <th style="width: 40px">Estado</th>
                      <th style="width: 40px">Editar</th>
                      <th style="width: 40px">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($usuario as $instructor)
                    <tr class="text-center">
                      <td>
                        {{ $instructor->cedula}}
                      </td>
                      <td>
                        {{ $instructor->nombres}}
                      </td>
                      <td>
                        {{ $instructor->apellidos}}
                      </td>
                      <td>
                        {{ $instructor->telefono}}
                      </td>
                      <td>
                        @if($instructor->activo)
                          <a onClick="alert('clic');" style="cursor:pointer;font-size:20px"><i class='fa fa-check-square' style="color:green"></i></a>
                        @else
                          <a onClick="alert('clic');" style="cursor:pointer;font-size:20px"><i class='fa fa-square-o' style="color:red"></i>
                        @endif
                      </td>
                      <td>
                        <button data-toggle="modal" data-target="#modal-danger">Pop
                        {{--<a style="cursor:pointer;font-size:20px" data-toggle="modal" data-target="#modal-danger">
                          <i class='fa fa-folder-open' style="color:green"></i>
                        </a>--}}
                        </button>
                      </td>
                      <td>
                        {{ $instructor->telefono}}
                      </td>
                    </tr>
                    @endforeach

                  <tbody>
                </table>
              </div>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          </div>
      <!-- /.col -->
      </div>
    <!-- /.row -->

    <!-- /.box body -->

    <div class="modal modal-warning fade" id="modal-warning" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Warning Modal</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@endsection


{{--Esta plantila que aparece a continuacion incluye el usuario, rol y fotografia
--en las vistas
--}}

@include('plantillas.all.usuario')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->
@endsection
@section('js')
  <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection
