<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class VendorAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()){
            if(Auth::user()->user_type == 3 or Auth::user()->user_type == 2 or Auth::user()->user_type == 1 or Auth::user()->user_type == 5 or Auth::user()->user_type == 6 or Auth::user()->user_type == 7 or Auth::user()->user_type == 8){
                return $next($request);
            }else{
            return redirect('admin');
            }
        }else{
            return redirect('admin');
        }
    }
}
