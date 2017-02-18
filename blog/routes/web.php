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

Route::group(['prefix'=>'articles'],function(){

	Route::get('view/{id}',[

		'uses'=> 'ArticlesController@Index',
		'as' => 'ArticleView' //nombre de la ruta

	]);

});
