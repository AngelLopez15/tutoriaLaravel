<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // creando un metodo
    // El metod __invoke se usa cuando queremos que el controlador invoque una unica ruta
    public function __invoke() {
        // usamos el metodo view que lo que hace es ir a la carpeta reources
        // views y debemos pasarle como parametro el nombre del archivo de la vista
        return view('home');
        // return "Hola, Mundo, estoy aprendiendo Laravel. Esta es la Ruta principal desde un controlador";
    }
}
