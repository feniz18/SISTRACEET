<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @if (Auth::check())
    <section class="content-header">
      <h1>
        @yield('seccion')
        <small>@yield('subseccion')</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      @yield('contenido')
    </section>
    <!-- /.content -->


  @else

      <div class="container">
        @yield('contenido')
      </div>


  @endif

</div>
