<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Setting;
use Illuminate\Http\Response;

class MaintenanceCheck
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
    if(Setting::get('break',0)==1 && !Auth::check()) {
      return new Response(view('maintenance'));
    }
    return $next($request);
  }
}
