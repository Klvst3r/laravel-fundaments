<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class PagesController extends Controller
{

    protected $request; 
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function home()
    {
        return view('home');
    }

    
    public function contacto()
    {
        return view('contactos');
    }

    public function mensajes()
    {
        return $this->request->all();
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
