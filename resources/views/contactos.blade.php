@extends('layout')

@section('contenido')
		<h1>Contactos</h1>
		<h2>Escríbeme</h2>
		<!-- 6.3.1. Formularios -->
		<form method="POST" action="contacto">
			<p><label for="nombre">Nombre
				<input type="text" name="nombre" value="{{ old('nombre') }}">
				{{ $errors->first('nombre') }}
			</label></p>
			<p><label for="email">Email
				<input type="email" name="email" value="{{ old('email') }}">
					{{ $errors->first('email') }}
			</label></p>
			<p><label for="mensaje">Mensaje
				<textarea name="mensaje">{{ old('mensaje') }}</textarea>
				{{ $errors->first('mensaje') }}
			</label></p>
			<p><input type="submit" value="Enviar">
		</form>
		<hr> 
@stop