<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="@yield('imagen')" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>@yield('nombreBarra')</p>

      </div>
    </div>
    @if(Auth::user()->rol_id == 'administrador')
      @include('plantillas.lateral.menuAdmin')
    @elseif (Auth::user()->rol_id == 'docente')
      @include('plantillas.lateral.menuUser')
    @endif
</aside>
