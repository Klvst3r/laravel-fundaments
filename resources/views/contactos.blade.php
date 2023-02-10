@extends('layout')

@section('contenido')
		<h1>Contactos</h1>
		<h2>Escríbeme</h2>
		<!-- 6.3.1. Formularios -->
		<form method="POST" action="contacto">
			<p><label for="nombre">Nombre
				<input type="text" name="nombre">
			</label></p>
			<p><label for="email">Email
				<input type="email" name="email">
			<p></label></p>
			<p><label for="mensaje">Mensaje
				<textarea name="mensaje"></textarea>
			</label></p>
			<p><input type="submit" value="Enviar">
		</form>
		<hr> 
@stop