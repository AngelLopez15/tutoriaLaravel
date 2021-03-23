<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

// Las rutas se declaran con un verbo y reciben como parametros
// una ruta y un funcion anonima

// Route::get('/', function () {
//     // return view('welcome');
//     return "Hola, Mundo, estoy aprendiendo Laravel. Esta es la Ruta principal";
// });

// La ruta anterior estaba con una funcion anonima
// sin embargo como ahora el controlador es el que se va a encargar
// de la logica de esa ruta. debe de quedar asi:
// Y todo lo que estaba dentro de la funcion ahora debe de estar dentro de un metodo
// de la clase controlador
Route::get('/', HomeController::class);

// Route::get('cursos', function () {
//     return "Hola, Mundo, desde la ruta de cursos";
// });

// Por default el controlador va a tratar de buscar el metodo invoke pero como no existe
// en este controlar debemos de especificarle que metodo debe usar y para eso debemos de ponerlo
// dentro de un arreglo donde el primer parametro es el controlar y el segundo el nombre del
// metodo que se encargara de esta ruta
Route::get('cursos', [CursoController::class, 'index']);

// Es IMPORTANTE el orden en el que aparecen las rutas ya que PHP lee los archivos de arriba
// hacia abajo  por lo tanto en este caso debemos poner esta ruta que inicia igual antes de
// la ruta dinamica ya que de otra manera este ruta nunca seria accesible
// Route::get('cursos/create', function () {
//     return "En esta pagina podras crear un curso";
// });

Route::get('cursos/create', [CursoController::class, 'create']);

// Para declarar una ruta dinamica se necesita una parametro en la url
// Route::get('cursos/{curso}', function ($curso) {
//     return "Hola, Mundo, y bienvenido al curso de: $curso";
// });

Route::get('cursos/{curso}', [CursoController::class, 'show']);

// Pasando mas de un parametro en la URL
// Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
//     return "Bienvenido al curso de: $curso de la categoria $categoria";
// });

// Para no tener tantas rutas y coma las dos rutas comentadas son casi iguales
// podemos  simplificarlas en una sola
// El signo de ? significa que ese parametro es opcional
// En la funcion debemos ponerle un valor por default al parametro opcional
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso de: $curso de la categoria $categoria";
//     }else {
//         return "Hola, Mundo, y bienvenido al curso de: $curso";
//     };
// });

// Este archivo web.php lo ideal es que solo tenga las rutas del sitio web
// y la logica debe de estar dentro de un controlador
