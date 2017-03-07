<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Milon\Barcode\DNS2D;

class ArticleController extends Controller
{
    //
    public function create(){

    	return view('articles.create');
    }

    public function store(Request $request){
    	//dd($request->name);
    	//insert
    	
    	return view("articles.viewQR")->with('name',$request->name);

    }
    
}
