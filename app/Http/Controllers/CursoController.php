<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Para administrar varias rutas debemos de crear varios metodos
    // con el nombre que nosotros queramos pero por convencion
    // el metodo encargado de mostrar la pagina principal se llama index
    // El metodo encargo de mostrar un formulario para crear algo
    // se le suele llamar create
    // Al metodo encargado de mostrar algo se le suele llamar show

    public function index() {
        // Funciona de las dos maneras con / o con .
        // return view('cursos/index');
        return view('cursos.index');
        // return "Hola, Mundo, desde la ruta de cursos";
    }

    public function create() {
        return view('cursos.create');
        // return "En esta pagina podras crear un curso";
    }

    public function show($curso) {
        // 'curso' => $curso Indicamos que la variable curso la busque como curso en la vista
        return view('cursos.show', ['curso' => $curso]);
        // return "Hola, Mundo, y bienvenido al curso de: $curso";
    }
}
