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
/*Route::get('/', function(){
    echo "<a href=". route('contactos') .">contacto</a></br>";
    echo "<a href=". route('contactos') .">contacto</a></br>";
    echo "<a href=". route('contactos') .">contacto</a></br>";
    echo "<a href=". route('contactos') .">contacto</a></br>";
    echo "<a href=". route('contactos') .">contacto</a></br>";
});*/

// 6.2.2
//------
Route::get('/', function () {
    return view('home');
});




// 6.2.1
//------
/* Route::get('contato', function(){
	return "Hola desde la página de contacto";
});	 */

/* Route::get('contactos', ['as' => 'contactos', function(){
    return "Seccion de contactos";
}]);
 */

 Route::get('contactame', ['as' => 'contactos', function(){
    return "Seccion de contactos";
}]);



/*Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
	return view('saludo', ['nombre' => $nombre]);
})->where('nombre',"[A-Za-z]+");	*/

//6.2.2 

/*Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
    return view('saludo')->with(['nombre' => $nombre]);
})->where('nombre',"[A-Za-z]+");    */

// Metodo compact
Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
    //siempre y cuando la variable nombre exista
    return view('saludo', compact('nombre'));//Devolvera un array con la llave nombre y el valor nombre 
})->where('nombre',"[A-Za-z]+");    