<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  @yield('Cssp')
	<title>@yield('titulo') | Sistra CEET</title>
</head>
<body>

  @include('partes.nav')

  @yield('contenido')

<script src="{{asset('jquery/jquery.js')}}"></script>
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
@yield('Jssp')
<footer class="page-footer blue center-on-small-only">

	<div class="footer-copyright">
			 <div class="container">
				 <ul>
					 <li>Luis Agustin Diaz Blanco</li>
 					<li>Juan Sebastian Castiblanco Pulido</li>
 					<li>David Steven Martinez Vargas</li>

				 </ul>

			 </div>
	 </div>

</footer>

</body>
</html>
