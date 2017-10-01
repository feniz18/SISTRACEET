<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">SISTRA CEET</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">


      @if(Auth::check())

        @if(Auth::user()->rol_id == "docente")

          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inscribirme a cursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">transferencias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">capacitaciones</a>
              </li>
            </ul>
          @endif
          @if(Auth::user()->rol_id == "administrador")

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Adminisitrar docentes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Subir transferencias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Generar certificados</a>
                </li>
              </ul>
            @endif

        @else

          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="#"><span class="sr-only">()</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
            </ul>

        @endif

      @if(Auth::check())

        <a> Bienvenido {{Auth::user()->nombres}}</a>
        <a class="nav-link disabled" href="logout">Cerrar sesion</a>

      @else
      <a class="nav-link disabled" href="sesion">Iniciar sesion</a>
      <a class="nav-link disabled" href="registro">Registrarme</a>

      @endif



  </div>
</nav>
