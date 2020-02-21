<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminAuth
{

    public function handle($request, Closure $next)
    {
        if(Session::has('user_id') && Session::get('user_role')=='Administrator'){
            return $next($request);
        }else{
            return redirect('user/signin');
        }
    }
}
