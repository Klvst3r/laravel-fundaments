<?php

//Originales con error en localización de la clase CreateMessageRequest
/*namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;*/

// 6.3.2 Ok - Funcionales para validación
namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;

use Illuminate\Http\Request;



class PagesController extends Controller
{

    //Inyeccion por constructor
    /*protected $request; 
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }*/

    //6.3.4. Agregar middleware mediante constructor 2da forma
    public function __construct()
    {
        //Si aplica el middleware example afectara a todos los metodos por el contructor que aplica a todos los metodos
        $this->middleware('example');

        //Para que actue a solo un metodo hay que especificarlo a traves de un array
        //$this->middleware('example', ['only' => ['home']]);
    }


    //Retorno de las vista a traves de Controladores
    public function home()
    {
        return view('home');
    }

    
    public function contacto()
    {
        return view('contactos');
    }

    //Inyeccion por constructor
    /*public function mensajes()
    {
        return $this->request->all();
    }*/

    //Inyeccion por el metodo
    /*public function mensajes(Request $request)
    {

        return $request->all();
        
    }*/
    //en el metodo inyectamos la clase
    /*public function mensajes(Request $request)
    {

        if($request->has('nombre')){
            return "Si tiene nombre";
        }else{
            return "No tiene nombre";
        }

    }*/

    //6.3.x. Procesamiento de Formulario        
    //public function mensajes(Request $request)
    public function mensajes(CreateMessageRequest $request)
    {

        //return $request->all();
        //6.3.1
        /*if($request->has('nombre'))
        {
            return "Si tiene nombre. Es " . $request->input('nombre');

        }
            return "No tiene nombre";*/

        //6.3.2. Validacion de formularios
        /*$this->validate($request,[
            'nombre'    =>  'required', //campo obligatorio
            'email'     =>  'required|email',  //vaidacion de tipo email Otra forma es: 'email'     =>  ['required','email'],
            'mensaje'   =>  'required|min:5' //Obligatorio con un minimo de cinco letras
        ]);*/

        //retornando todos los campos del formulario
        //return $request->all(); //Procesar los datos del formulario

        // 6.3.3. Responses

        //Cambio de valor a los headers
        /*$data = $request->all();
        return response()->json(['data' => $data],202);*/

        //Se envian headers
        /*$data = $request->all();
        return response()->json([
            'data' => $data
            ],202)
            ->header('TOKEN','secret');*/

        //Redirección
        /*$data = $request->all();
        return redirect('/');*/
        
        //Redirección a una pagina especifica.
        /*$data = $request->all();
        return redirect()->route('saludos');*/

        //Redirección con sesiones para mensajes.
        /*$data = $request->all();
         
         return redirect()
            ->route('contactos')
            ->with('info', 'Tu mensaje ha sido enviado correctamente :)');*/

        //Redirección  a la ruta anterior.

        $data = $request->all();
         
         return back()
            ->with('info', 'Tu mensaje ha sido enviado correctamente :)');
        

    }

    

    public function saludo($nombre = "Invitado")
    {
        $html = "<h2>Contenido HTML</h2>";
        
        $script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>";
        
        $consolas = [
            "Play Station 4", 
            "Xbox One",
            "Wii U"
        ];
        return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
    }
}
 