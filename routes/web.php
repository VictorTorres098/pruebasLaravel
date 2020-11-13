<?php

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

//Route::get('/', function () {
//    return view('welcome');


Route::get('/', function(){
    return "este es un ejemplo de ruta";
});

//pagina de contacto
Route::get('contacto', function(){
    return ("test de ruta de contacto");
});

//saludo con url
Route::get('saludo/{nombre}',function($nombre){
    return ("saludos ".$nombre);
});

