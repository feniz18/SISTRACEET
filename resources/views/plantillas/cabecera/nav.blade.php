<header class="main-header">
  <!-- Logo -->
  <a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>S</b>C</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Sistra</b>CEET</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="@yield('imagen')" class="user-image" alt="User Image">
            <span class="hidden-xs">@yield('nombre')</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="@yield('imagen')" class="img-circle" alt="User Image">

              <p>
                @yield('nombre')
                <small>@yield('rol')</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="/perfil" class="btn btn-default btn-flat">Perfil</a>
              </div>
              <div class="pull-right">
                <a href="/logout" class="btn btn-default btn-flat">Cerrar sesión</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->

      </ul>
    </div>
  </nav>
</header>
