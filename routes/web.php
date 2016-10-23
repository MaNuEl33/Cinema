<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function() {
  return "Hola desde routes/web.php";
});

Route::get('nombre/{nombre}', function($nombre) {
  return "Mi nombres es: " . $nombre;
});

Route::get('edad/{edad?}', function($edad = 0) {
  return "Mi edad es: " . $edad;
});

Route::get('controlador', 'PruebaController@index');

Route::get('name/{nombre}', 'PruebaController@name');

Route::resource('movie', 'MovieController');
