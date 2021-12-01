<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nosotros</title>
</head>
<body>
	@extends('master')
	@section('title', 'Nosotros')
	@section('content')
	<h1>Nosotros</h1>
	<p>Mi nombre es <?//php echo $nombreenviado;?></p>
	<p>Mi nombre es {{$nombreenviado}}
</body>
</html> -->

@extends('master')
	@section('title', 'Nosotros')
	@section('content')
	<h1>Nosotros</h1>
	<p>Mi nombre es <?php echo $nombreenviado;?></p>
@endsection