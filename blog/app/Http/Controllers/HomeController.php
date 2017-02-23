<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
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
        $categories=Category::all();
        return view('index')->with('cat',$categories);
    }
}
