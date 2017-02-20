<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Laracasts\Flash\Flash;

class CategoriasController extends Controller
{
    //


    public function index(){

        //$users= User::all();
        $categories=Category::orderBy('id','ASC')->paginate(5);

        //return view('admin.users.index',$users);
        return view('admin.categories.index')->with('cat',$categories); //users nombre de var en la vista $users var con los valores obtenidos desde la bd
    }

    public function create(){

    	return view('admin.categories.create');
    }

    public function store(Request $request){

    	$category=new Category($request->all());
    	$category->save();
        flash('Se ah registrado con exito a ' .$category->name, 'success')->important();
        //Flash::success("Se ah registrado con exito a " .$user->name);
        return redirect()->route('categories.index');
    }

    public function destroy($id){
        $category=Category::find($id);
        $category->delete($category);
        Flash::warning('Se elimino correctamente la categoria '. $category->name);
        return redirect()->route('categories.index');
    }

    public function edit($id){    
        $category=Category::find($id);
        return view('admin.categories.edit')->with('cat',$category);
    }

    public function update(Request $request,$id){
        $category=Category::find($id);
        $category->fill($request->all());
        $category->save();

        Flash::warning('Se edito correctamente');
        return redirect()->route('categories.index');
    }


}
