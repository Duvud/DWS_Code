<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class tipo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($this->isAdmin($request)){
            return redirect("admin");
        }
            
        return $next($request);
    }
    public function isAdmin(Request $request){
       return Auth::user()->tipo === 1;
    }
}
