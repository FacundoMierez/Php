<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Article;

use Carbon\Carbon;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
         Carbon::setLocale('es');
    }

    /**
     * Redirecciona a la pagina principal
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        /*---articulo mas reciente---*/
        $art_rec=Article::orderBy('created_At','DESC')->paginate(1);
        $art_rec->each(function($art_rec){
                    $art_rec->category;
                    $art_rec->images;
            
        });
        /*----articulo mas reciente----*/

        /*--lista de categorias--*/
        $categories=Category::orderBy('name','ASC')->get();

        /*--lista de categoiras---*/

        //dd($art_rec);

        $articles=Article::orderBy('id','DESC')->take(6)->get();

        $articles->each(function($articles){
                $articles->category;
                $articles->images;
        
        });
        
        return view('index')
            ->with('articleReciente',$art_rec)
            ->with('cat',$categories)
            ->with('articles',$articles);
    }

    public function searchCategory($name){
        $category= Category::SearchCategory($name)->first();
        $article=$category->articles()->paginate(6);

        $article->each(function($articles){
            $articles->category;
            $articles->images;
        
        });

       return view('articles.view')->with('articles',$article);
    }

    public function searchArticle($name){

        $article=Article::Search($name)->get();
        $article->each(function($articles){
            $articles->category;
            $articles->images;
        
        });

        $active="active";

        return view('articles.details')
            ->with('article',$article)
            ->with('active',$active);

    }
}
