@include('plantillas.cabecera.head')
<body class="hold-transition skin-red @yield('ocultarBarra')">
<div class="wrapper">
	
	@if (Auth::check())
		@include('plantillas.cabecera.nav')
		@include('plantillas.lateral.aside')
	@else
		@include('plantillas.cabecera.navcol')
	@endif
	@include('plantillas.contenido.contenido')
	@include('plantillas.pie.footer')

</div>
@include('plantillas.pie.foot')
