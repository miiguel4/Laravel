<?php

/* App::setlocale('es'); */

use App\Http\Controllers\PortfolioController;
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

// Hace referencia a la pagina de inicio
/* Route::get('/', function () {
    return "Hola desde la pagina de inicio";
}); */

//Responde a contacto 
Route::get('contacto', function () {
    return "Hola desde la pagina contacto";
});

//Pasar parámetros
/* Route::get('saludos/{nombre}', function ($nombre) {
    return "Saludos " . $nombre;
}); */

// Parametro no obligatorio
Route::get('saludos/{nombre?}', function ($nombre = "Invitado") {
    return "Saludos " . $nombre;
});

//Named Routes

/* Route::get('contactos', function () {
    return "Sección de contactos";
}); */

/* Route::get('/', function() {
    echo "<a href='/contactos'>Contactos 1</a><br>";
    echo "<a href='/contactos'>Contactos 2</a><br>";
    echo "<a href='/contactos'>Contactos 3</a><br>";
    echo "<a href='/contactos'>Contactos 4</a><br>";
    echo "<a href='/contactos'>Contactos 5</a><br>";
}); */

Route::get('contactame', function () {
    return "Sección de contactos";
})->name('contactos');

/* Route::get('/', function() {
    echo "<a href='". route('contactos') ."'>Contactos 1</a><br>";
    echo "<a href='". route('contactos') ."'>Contactos 2</a><br>";
    echo "<a href='". route('contactos') ."'>Contactos 3</a><br>";
    echo "<a href='". route('contactos') ."'>Contactos 4</a><br>";
    echo "<a href='". route('contactos') ."'>Contactos 5</a><br>";
}); */

//Vistas
/* Route::get('/', function() {
    return view('welcome');
})->name('home');
 */

    //With 
    /*  Route::get('/', function() {
        $nombre = "Miguel";
        return view('home')->with('nombre', $nombre);
    })->name('home'); */

    //Witch array 
    /* Route::get('/', function() {
        $nombre = "Miguel";
    return view('home')->with(['nombre'=> $nombre]);
    })->name('home'); */
    
    // Array como segundo parametro
    /* Route::get('/', function() {
        $nombre = "Miguel";
    return view('home', ['nombre'=> $nombre]);
    })->name('home'); */

    // Funcion compact
  /*   Route::get('/', function() {
        $nombre = "Miguel";
    return view('home', compact('nombre'));
    })->name('home'); */

    // LLamar directamente a la vista
   /*  Route::view('/', 'home'); */
  /*   Route::view('/', 'home', ['nombre'=> 'Miguel']); */
Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');
/* Route::view('/portfolio', 'portfolio')->name('portfolio'); */
Route::view('/contacto', 'contact')->name('contact');

// Estructura de control con blade
/* $portfolio = [
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4'],
];
Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio'); */

// Metodo Invoke (-i). Al crear el controlador
/* Route::get('/portfolio', 'PortfolioController')->name('portfolio'); */

// index (-r).  Al crear el controlador
/* Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy'); */

/* Route::resource('portafolio','ProjectController')->names('projects')->parameters(['portafolio' => 'project'])->middleware('auth'); */
Route::resource('portafolio','ProjectController')->names('projects')->parameters(['portafolio' => 'project']);
// Para llamar a todos los métodos
/* Route::resource('projects','PortfolioController2' ); */
/* Route::resource('projects','PortfolioController2' )->only(['index','show']); */
/* Route::resource('projects','PortfolioController2' )->except(['index','show']); */
/* Route::apiResource('projects','PortfolioController3' ); */
Route::post('contact', 'MessageController@store2')->name('messages.store');

Auth::routes(['register' => false ]);

