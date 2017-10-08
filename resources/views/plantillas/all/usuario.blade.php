
@if (Auth::check())
  @section('ocultarBarra','sidebar-mini')
  @section('imagen'){{asset('admin/dist/img/avatar5.png')}}@endsection
  @section('nombre') {{Auth::user()->nombres}} {{Auth::user()->apellidos}} @endsection
  @section('nombreBarra') {{Auth::user()->nombres}} @endsection
  @section('rol'){{Auth::user()->rol_id}} @endsection
@else
  @section('ocultarBarra','layout-top-nav')
@endif
