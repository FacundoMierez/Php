<?php

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
/*Rutas GET,POST,PUT,DELETE,RESOURCE*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles/{nombre?}', function ($nombre ="No coloco nombre") {
     echo "Esta es la seccion de articulos" . $nombre;
});
