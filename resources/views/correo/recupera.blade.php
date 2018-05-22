<!DOCTYPE html>
<html>
  <head lang="es">
    <meta charset="utf-8">
    <title>@lang('sistra.recuperacionContrasena')</title>
  </head>
  <body>

    <h3>@lang('sistra.recuperacionContrasena')</h3>
    <a href="{{ env('APP_URL')}}/reset/{{$usuario->email}}/{{$codigo}}">@lang('sistra.recuperarContrasena')</a>

  </body>
</html>
