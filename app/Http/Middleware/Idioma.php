<?php

namespace App\Http\Middleware;

use Closure;

class Idioma
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
        $idioma = $request->hasCookie("idioma");

         if($idioma){
            \App::setLocale($request->cookie("idioma"));
            return $next($request);
         }
        
        return $next($request);
    }
}
