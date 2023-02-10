<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class PagesController extends Controller
{

    //Inyeccion por constructor
    /*protected $request; 
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }*/



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
        
    public function mensajes(Request $request)
    {

        return $request->all();

        if($request->has('nombre'))
        {
            return "Si tiene nombre";
        }

        return "No tiene nombre";
        

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
