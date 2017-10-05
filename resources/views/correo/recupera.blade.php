<!DOCTYPE html>
<html>
  <head lang="es">
    <meta charset="utf-8">
    <title>Recuperacion contraseña</title>
  </head>
  <body>

    <h3>Recuperacion de contraseña</h3>
    <a href="{{ env('APP_URL')}}/reset/{{$usuario->email}}/{{$codigo}}">Recuperar contraseña</a>

  </body>
</html>
