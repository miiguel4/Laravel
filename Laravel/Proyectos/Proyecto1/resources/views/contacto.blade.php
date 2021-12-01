<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
</head>
<body>
	<h1 >Datos de contacto</h1>
	<p>Mi nombre es {{$nombre}}</p>
	<p>Mi apellido es {{$apellido}}</p>
</body>
</html>
 -->

 @extends('master')
	@section('title', 'Contacto')
	@section('content')
	<h1>Contacto</h1>
	<h1 >Datos de contacto</h1>
	<p>Mi nombre es {{$nombre}}</p>
	<p>Mi apellido es {{$apellido}}</p>
@endsection