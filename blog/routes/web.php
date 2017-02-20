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

Route::get('/', [
    
    'uses'=> 'HomeController@Index',
	'as' => 'HomeView' //nombre de la ruta
]);

Route::group(['prefix'=>'articles'],function(){

	Route::get('view/{id}',[

		'uses'=> 'ArticlesController@Index',
		'as' => 'ArticleView' //nombre de la ruta

	]);

});

Route::group(['prefix'=>'admin'],function(){
					//primero parametro nombre y segundo el controlador
	Route::resource('users','usuariosController');
	Route::get('users/{id}/destroy',[
		'uses'=>'usuariosController@destroy',
		'as'=>'users.destroy'
	]);

});

