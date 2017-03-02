<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Article;

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
            ->with('articles',$art_rec)
            ->with('cat',$categories)
            ->with('article',$articles);
    }
}
