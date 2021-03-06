<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Factory as Auth;


use Closure;

class Admin
{
     protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next)
    {

        if($this->auth->user()->isAdmin())
        {
            return $next($request); //sigue con la peticion
        }else{
            abort(401);
        }
        
    }
}
