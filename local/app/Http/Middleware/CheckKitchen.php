<?php

namespace App\Http\Middleware;

use Closure;

class CheckKitchen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       $value = $request->session()->get('role');
       if($value != "Kitchen")
       {
          return redirect()->back();
       }
       return $next($request);
    }
}
