<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    //
    public function Index($id){
    	$article=Article::find($id);
	  
	  	$article->category;
	  	$article->user;
	  	$article->tags;
	 

	  	echo $article;

    }
}
