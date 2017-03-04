<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

use Socialite;

class SocialController extends Controller
{
    use AuthenticatesUsers;


    public function redirect($provider)
    {
    	return Socialite::driver($provider)->redirect();
    }

    public function callback($provider){
    	$user = Socialite::driver($provider)->user();
    	//$this->login($user->name);
    	$user_socialite=User::create([
    		'facebook_id'=>$user->getId(),
    		'name'=>$user->getName(),
    		'email'=>$user->getEmail()
    	]);

    	auth()->login($user_socialite);
    	

    	return redirect('/');

    }





}
