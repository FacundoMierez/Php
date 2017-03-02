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

Route::get('categories/{name}', [
    
    'uses'=> 'HomeController@searchCategory',
	'as' => 'HomeSearchCategory' //nombre de la ruta
]);

Route::get('articles/{name}', [
    
    'uses'=> 'HomeController@searchArticle',
	'as' => 'HomeSearchArticle' //nombre de la ruta
]);




Route::group(['prefix'=>'articles'],function(){

	Route::get('view/{id}',[

		'uses'=> 'ArticlesController@Index',
		'as' => 'ArticleView' //nombre de la ruta

	]);

});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	

	/* INICIO RUTAS DE USUARIOS*/

	Route::get('users/list',[
		'uses'=>'usuariosController@list',
		'as'=>'users.list'
	]);

	//primer parametro nombre y segundo el controlador
	Route::resource('users','usuariosController');
	
	Route::get('users/{id}/destroy',[
		'uses'=>'usuariosController@destroy',
		'as'=>'users.destroy'
	]);

	/* FIN RUTAS DE USUARIOS*/


	/* INICIO RUTAS DE CATEGORIAS*/
	Route::resource('categories','CategoriasController');

	Route::get('categories/{id}/destroy',[
		'uses'=>'CategoriasController@destroy',
		'as'=>'categories.destroy'
	]);
	/* FIN RUTAS DE CATEGORIAS*/


	/*INICIO RUTA TAGS*/
	Route::resource('tags','TagsController');

	Route::get('tags/{id}/destroy',[
		'uses'=>'TagsController@destroy',
		'as'=>'tags.destroy'
	]);
	/*FIN RUTA TAGS*/

	/*INICIO RUTA ARTICULOS*/


	Route::resource('articles','ArticlesController');
	Route::get('articles/destroy/{id}',[
		'uses'=>'ArticlesController@destroy',
		'as'=>'articles.destroy'
	]);

	/*FIN RUTA ARTICULOS*/


	Route::get('images',[
		'uses'=>'ImagesController@index',
		'as'=>'admin.image.index'
	]);


});


Auth::routes();
