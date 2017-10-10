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
    @if(Auth::user())
    @include('plantillas.lateral.menu')
</aside>
