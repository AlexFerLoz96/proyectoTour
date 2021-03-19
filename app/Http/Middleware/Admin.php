<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
/*-------------------------------------------------------------------------------
------------------------FUNCION PARA SABER SI EL USUARIO-------------------------
-----------------------------------ES ADMIN--------------------------------------
--------------------------------------------------------------------------------*/
    public function handle($request, Closure $next)
    {
       if (Auth::check())
       {
            if(Auth::user()->isAdmin())
            {
                return $next($request);
            }
       }
    
        return redirect('/');
    }
}
