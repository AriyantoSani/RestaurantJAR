<?php

namespace App\Http\Middleware;

use Closure;

class CheckWaiter
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
       if($value != "Waiter")
       {
          return redirect()->back();
       }
       return $next($request);
    }
}
