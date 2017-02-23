<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Tag;
use Laracasts\Flash\Flash;

class TagsController extends Controller
{
    //

    public function index(Request $request){
        $tags=Tag::search($request->name)->orderBy('id','ASC')->paginate(5);
    	return view('admin.tags.index')->with('tag',$tags);
    }

    public function create(){
    	return view('admin.tags.create');
    }

    public function store(Request $request){

    	$tags=new Tag($request->all());
    	$tags->save();

    	Flash::success('El tag ' . $tags->name .' se agrego correctamente');
    	return redirect()->route('tags.index');

    }

    public function destroy($id){
        $tags=Tag::find($id);
        $tags->delete($tags);
        Flash::warning('Se elimino correctamente el usuario '. $tags->name);
        return redirect()->route('tags.index');
    }

     public function edit($id){
        
        $tags=Tag::find($id);
       
       return view('admin.tags.edit')->with('tag',$tags);
    }


    public function update(Request $request,$id){
        $tags=Tag::find($id);
        $tags->fill($request->all());
        $tags->save();

        Flash::warning('Se edito correctamente');
        return redirect()->route('tags.index');
    }
}
