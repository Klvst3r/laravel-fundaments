<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saludo</title>
</head>
<body>

	<h1>Saludos para {{ $nombre }}</h1> 
	{!! $html !!}
	{{ $script }}

	<ul>
		@forelse($consolas as $consola)
			<li>
				{{ $consola }}
			</li>
		@empty
			<p>No hay consolas</p>
		@endforelse
	</ul>

	@if(count($consolas) === 1)
		<p>Solo tienes una consola</p>
	@elseif(count($consolas) > 1)
		<p>Tienes varias consolas</p>
	@else(count($consolas) > 1)
		<p>No tienes ninguna consola</p>
	@endif

	<header>
		<nav>
			<a href="<?php echo route('home') ?>">Inicio</a>
			<a href="<?php echo route('saludos','Klvst3r') ?>">Saludos</a>
			<a href="<?php echo route('contactos') ?>">Contactos</a>
		</nav>
	</header>
</body>
</html>
 