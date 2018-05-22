<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="/" class="navbar-brand"><b>Sistra</b>Ceet</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="true">
            <i class="fa fa-bars"></i>
        </button>

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">@lang('sistra.inicio')</a></li>
          <li><a href="/noticias">@lang('sistra.noticias')</a></li>
          <li><a href="/integrantes">@lang('sistra.integrantes')</a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">@lang("sistra.idioma")<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/api/idioma/es">@lang("sistra.espanol")</a></li>
                <li><a href="/api/idioma/en">@lang("sistra.ingles")</a></li>
              </ul>
            </li>
        </ul>

      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

            <li><a href="/sesion">@lang('sistra.iniciarSesion')</a></li>
            <li><a href="/registro">@lang('sistra.registrarse')</a></li>

        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>
