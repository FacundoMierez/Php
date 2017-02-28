<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;
use App\Image;
use Laracasts\Flash\Flash;
use App\Http\Request\ArticleRequest;


class ArticlesController extends Controller
{
    //
    public function index(){
    	
    	return view('admin.articles.list');

    }


    public function create()
    {
    	$category= Category::orderBy('name','ASC')->pluck('name','id');
    	$tags=Tag::orderBy('name','ASC')->pluck('name','id');

    	return view('admin.articles.create')->with('cats',$category)->with('tags',$tags);
    }

    public function store(ArticleRequest $request){

    	//dd($request->tags);

    	//MANIPULACION DE IMAGENES
		if($request->file('image'))
		{
	    	$file=$request->file('image');//obtengo la imagen
	    	$name='blog_'.time().'.'.$file->getClientOriginalExtension();//le asigno un nombre
	    	$path=public_path().'/images/articles/';//establezco la ruta
	    	$file->move($path,$name); //muevo hacia el directorio
	    }

	    $article=new Article($request->all());
	    $article->user_id=\Auth::user()->id; 
	    $article->save();
		
		//sync lo que hace es rellenar la tabla pibote
		$article->tags()->sync($request->tags);

		$image = new Image();
		$image->name = $name;
		//article es el metodo que esta en el modelo de image y associate lo que hacer es asociar el modelo article con image
		$image->article()->associate($article);
		$image->save();

		Flash::success('Se ha creado el articulo '. $article->title . ' con exito !');
		return redirect()->route('articles.index'); 
    }

}
