<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function(){
    return "Hola desde la página de inicio";
}); */
Route::get('/', function(){
    echo "<a href='contactos'>contacto</a></br>";
    echo "<a href='contactos'>contacto</a></br>";
    echo "<a href='contactos'>contacto</a></br>";
    echo "<a href='contactos'>contacto</a></br>";
    echo "<a href='contactos'>contacto</a></br>";
});

Route::get('contato', function(){
	return "Hola desde la página de contacto";
});	

Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
	return "Saludos $nombre";
})->where('nombre',"[A-Za-z]+");	