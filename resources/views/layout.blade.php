<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<header>
		<nav>
			<a href="<?php echo route('home') ?>">Inicio</a>
			<a href="<?php echo route('saludos','Klvst3r') ?>">Saludos</a>
			<a href="<?php echo route('contactos') ?>">Contacto</a>
		</nav>
	</header>
	
	@yield('contenido')
	
	<footer>Copyright © {{ date('Y') }}</footer>
</body>
</html>