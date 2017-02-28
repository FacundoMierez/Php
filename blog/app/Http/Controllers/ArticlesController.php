<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;

use App\Article;
use App\Category;
use App\Tag;
use App\Image;


class ArticlesController extends Controller
{
    //
    public function index(Request $request){
    	
    	$articles = Article::Search($request->title)->orderBy('id', 'DESC')->paginate(5);
		$articles->each(function($articles){
			$articles->category;
			$articles->user;
		});
    	return view('admin.articles.index')->with('articles', $articles);

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


    public function edit($id)
	{
		$article = Article::find($id);
		$article->category;
		$categories = Category::orderBy('name', 'DESC')->pluck('name','id');
		$tags = Tag::orderBy('name', 'DESC')->pluck('name','id');

		$my_tags = $article->tags->pluck('id')->ToArray();
		

		return view('admin.articles.edit')
			->with('categories', $categories)
			->with('article', $article)
			->with('tags', $tags )
			->with('my_tags', $my_tags);

	}

	public function update(Request $request, $id)
	{
		$article = Article::find($id);
		$article->fill($request->all());
		$article->save();

		$article->tags()->sync($request->tags);
		Flash::warning('Se ha editado el articulo '. $article->title . ' de forma exitosa');
		return redirect()->route('articles.index');
	}


	public function destroy($id)
	{
		$article = Article::find($id);
		$article->delete();

		Flash::error('Se a eliminado el articulo '. $article->title .' con exito');
		return redirect()->route('articles.index');
	}




}
