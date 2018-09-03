<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Auth;


class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $admin;
    public function __construct(Guard $auth){
        $this->admin = $auth;
    }

    public function handle($request, Closure $next, $guard = 'admin')
    {
       // Auth::guard('admin')->user()->name;
        if (Auth::guard($guard)->check() && Auth::guard($guard)->user()->level == 'admin') {
            return $next($request);
        }else{
            // Auth::logout();
            return redirect()->route('login');
            
        }
        
    }
}
