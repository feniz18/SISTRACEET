<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">BARRA DE NAVEGACIÓN</li>
  {{--Seccion docentes--}}
  <li class="treeview @yield('docentes')">
    <a href="#">
      <i class="glyphicon glyphicon-user"></i> <span>@lang('sistra.instructores')</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="@yield('administrarDocentes')"><a href="/administraDocentes"><i class="fa fa-circle-o"></i>@lang('sistra.administrarInstructores')</a></li>
    </ul>
  </li>
  {{--fin seccioin docentes --}}
  {{--inicio seccion transferencias --}}
  <li class="treeview @yield('transferecias')">
    <a href="#">
      <i class="fa fa-fw fa-paper-plane"></i> <span>@lang('sistra.transferencias')</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="@yield('administrarTransferencias')"><a href="/administraTransferencia"><i class="fa fa-circle-o"></i>@lang('sistra.administrarTransferencias')</a></li>
    </ul>
  </li>
  {{--fin seccion transferencias--}}
  {{--inicio seccion reportes--}}
  <li class="treeview @yield('reportes')">
    <a href="#">
      <i class="fa fa-fw fa-file-text"></i> <span>@lang('sistra.reportes')</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="@yield('reporteLog')"><a href="/logReporte"><i class="fa fa-circle-o"></i>@lang('sistra.reporteLogs')</a></li>
      <li class="@yield('reporteUsuarios')"><a href="/reporte/usuarios"><i class="fa fa-circle-o"></i>@lang('sistra.reportesUsuarios')</a></li>
    </ul>
  </li>
  {{--fin seccion reportes}}
  {{--inicio seccion sedes--}}
  <li class="treeview @yield('sedes')">
    <a href="#">
      <i class="fa fa-fw fa-home"></i> <span>@lang('sistra.sede')s</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="@yield('administrarSedes')"><a href="/sedes"><i class="fa fa-circle-o"></i>@lang('sistra.administraSedes')</a></li>
    </ul>
  </li>
  {{--fin seccion sedes --}}
  {{--inicio seccion noticias--}}
  <li class="treeview @yield('noticias')">
    <a href="#">
      <i class="fa fa-fw fa-newspaper-o"></i> <span>@lang('sistra.noticias')</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="@yield('noticiasBanner')"><a href="/administraNoticias"><i class="fa fa-circle-o"></i>@lang('sistra.noticiasBanner')</a></li>
    </ul>
  </li>
  {{--fin seccion noticias --}}
</ul>
</section>
<!-- /.sidebar -->
