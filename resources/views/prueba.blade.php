<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>prueba</title>
</head>
<body>

	@foreach ($integrante as $integrantes)
		{{ $integrantes['nombre'] }};
	@endforeach
	
</body>
</html>