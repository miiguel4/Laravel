<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
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

/*Route::get('/', function () {
    return 'Hola mundo';
});*/

/*Route::get('/test', function () {
    return 'Aprendiendo las rutas';
});*/

/*Route::get('/usuarios/{nombre}',function($nombre){
return $nombre;
});*/

/*Route::get('/nosotros', function () {
    return view( view: 'nosotros');
});*/

/*Route::get('/contacto', function () {
return view( view: 'contacto');
});*/

  
Route::get('/',[PaginasController::class,'home'] );
Route::get('/nosotros/{nombre}' , [PaginasController::class,'nosotros']);
Route::get('/contacto' , [PaginasController::class,'contacto']);

Route::get('/productos',function(){
    $productos= App\Models\Productos::all();
    return $productos;
    });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>