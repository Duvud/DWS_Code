<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

class IsAdmin
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
        //if(DB::table('users')->where('id',Auth::user()->getAuthIdentifier())->value('type') === 1)
        $user = Auth::user();
        if($user === null){
           return redirect()->route('none');
            //return redirect()->action([HomeController::class, 'none']);
        }else{
            if(Auth::user()->type === "1")
                return $next($request);
            else{
                return redirect()->route('dash');
                //return redirect()->action([HomeController::class, 'index']);
            }
        }

    }
}
