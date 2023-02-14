@extends('layout')

@section('contenido')
		<h1>Contactos</h1>
		<h2>Escríbeme</h2>
		<!-- 6.3.3 Redirección con sesiones -->

		@if( session()->has('info') )
			<h3>{{ session('info') }}</h3>
		@else


		<!-- 6.3.1. Formularios -->
		<form method="POST" action="contacto">
			<p><label for="nombre">Nombre
				<input type="text" name="nombre" value="{{ old('nombre') }}">
				{!! $errors->first('nombre','<span class=error>:message</span>') !!}
			</label></p>
			<p><label for="email">Email
				<input type="email" name="email" value="{{ old('email') }}">
					{!! $errors->first('email','<span class=error>:message</span>') !!}
			</label></p>
			<p><label for="mensaje">Mensaje
				<textarea name="mensaje">{{ old('mensaje') }}</textarea>
				{!! $errors->first('mensaje','<span class=error>:message</span>') !!}
			</label></p>
			<p><input type="submit" value="Enviar">
		</form>


		@endif

		<hr> 
@stop