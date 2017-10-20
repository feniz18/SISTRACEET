
@if (Auth::check())
  @section('ocultarBarra','sidebar-mini')
  @section('imagen')@if(Auth::user()->imagen == null){{asset('storage/defecto.png')}}@else{{asset('storage/' . Auth::user()->cedula . Auth::user()->imagen)}}@endif @endsection
  @section('nombre') {{Auth::user()->nombres}} {{Auth::user()->apellidos}} @endsection
  @section('nombreBarra') {{Auth::user()->nombres}} @endsection
  @section('rol'){{Auth::user()->rol_id}} @endsection
@else
  @section('ocultarBarra','layout-top-nav')
@endif
