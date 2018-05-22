<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">@lang('sistra.barraNavegacion')</li>
  {{--Seccion docentes--}}
  <li class="treeview @yield('cursos')">
    <a href="#">
      <i class="glyphicon glyphicon-user"></i> <span>@lang('sistra.cursos')</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="@yield('verCursos')"><a href="/verCursos"><i class="fa fa-circle-o"></i>@lang('verCursos')</a></li>
    </ul>
  </li>
  {{--fin seccioin docentes --}}
</ul>
</section>
<!-- /.sidebar -->
