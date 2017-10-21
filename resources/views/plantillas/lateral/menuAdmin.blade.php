<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">BARRA DE NAVEGACIÓN</li>
  <li class="treeview @yield('docentes')">
    <a href="#">
      <i class="glyphicon glyphicon-user"></i> <span>Docentes</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="@yield('administrarDocentes')"><a href="/administraDocentes"><i class="fa fa-circle-o"></i>Administrar Docentes</a></li>
      <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
    </ul>
  </li>
  <li class="treeview @yield('transferecias')">
    <a href="#">
      <i class="fa fa-fw fa-paper-plane"></i> <span>Trasferecias</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="@yield('administrarTransferencias')"><a href="/administraTransferencia"><i class="fa fa-circle-o"></i>Administrar Transferencias</a></li>
    </ul>
  </li>
</ul>
</section>
<!-- /.sidebar -->
