<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    //

    public function index(){


    }

    //http://127.0.0.1:8000/admin/users/create
    public function create(){
    	return view('admin.users.create');
    }
    
    public function store(Request $request){
    	
    	$user=new User($request->all());
    	$user->password=bcrypt($request->password);
    	$user->save();



    }


}
