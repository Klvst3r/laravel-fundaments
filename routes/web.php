<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;




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

// 6.2.2 Inicial
//------
/*Route::get('/', function () {
    return view('home');
});*/




// 6.2.1
//------
/* Route::get('contato', function(){
	return "Hola desde la página de contacto";
});	 */

/* Route::get('contactos', ['as' => 'contactos', function(){
    return "Seccion de contactos";
}]);
 */

 /*Route::get('contactame', ['as' => 'contactos', function(){
    return "Seccion de contactos";
}]);*/



/*Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
	return view('saludo', ['nombre' => $nombre]);
})->where('nombre',"[A-Za-z]+");	*/

//6.2.2 

/*Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
    return view('saludo')->with(['nombre' => $nombre]);
})->where('nombre',"[A-Za-z]+");    */

// Metodo compact
/*Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
    //siempre y cuando la variable nombre exista
    return view('saludo', compact('nombre'));//Devolvera un array con la llave nombre y el valor nombre 
})->where('nombre',"[A-Za-z]+");    */


//6.2.2. rutas con nombre

/*Route::get('/', ['as' => 'home',  function () {
    return view('home');
}]);

Route::get('contactame', ['as' => 'contactos', function(){
    return "Seccion de contactos";
}]);

Route::get('saludos/{nombre?}', ['as' =>'saludos', function($nombre = "Invitado"){
    return view('saludo', compact('nombre'));
}])->where('nombre',"[A-Za-z0-9]+");    */


//6.2.3 Blade
//----
/*Route::get('/', ['as' => 'home',  function () {
    return view('home');
}]);

Route::get('contactame', ['as' => 'contactos', function(){
    return view('contactos');
}]);

Route::get('saludos/{nombre?}', ['as' =>'saludos', function($nombre = "Invitado"){
    $html = "<h2>Contenido HTML</h2>";
    $script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>";
    $consolas = [
        "Play Station 4", 
        "Xbox One",
        "Wii U"
    ];

    return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
}])->where('nombre',"[A-Za-z0-9]+");    */




//6.2.4 Controladores
//----
//Route::get('/', [PostController::class, 'home']);
/*Route::get('/', ['as' => 'home',  function () {
    return view('home');
}]);*/


/*Route::get('/', function() {
})->name('home');*/



//Route::get("/", ['as' => 'home', 'uses' => 'PagesController@home']);
// 6.3.4 Middleware - Example

Route::get("/", ['as' => 'home', 'uses' => 'PagesController@home'])->middleware('example');

// Usando la sintaxis de acción
//Route::get("/", [PagesController::class, 'home']);



/*Route::get('contactame', ['as' => 'contactos', function(){
    return view('contactos');
}]);*/
//Route::get("/contactos", [PagesController::class, 'contact']);
Route::get('contactame',['as' =>'contactos', 'uses' => 'PagesController@contacto']);


/*Route::get('saludos/{nombre?}', ['as' =>'saludos', function($nombre = "Invitado"){
    $html = "<h2>Contenido HTML</h2>";
    $script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>";
    $consolas = [
        "Play Station 4", 
        "Xbox One",
        "Wii U"
    ];

    return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
}])->where('nombre',"[A-Za-z0-9]+");    */

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo'])->where('nombre',"[A-Za-z0-9]+");

//6.3.1. Procesamiento de formulario con el metodo post

Route::post('contacto', 'PagesController@mensajes');