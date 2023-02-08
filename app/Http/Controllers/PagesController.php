<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /*public function __invoke(){
        return "Welcome to principal page";
    }*/
    public function home()
    {
        return view('home');
    }
}
