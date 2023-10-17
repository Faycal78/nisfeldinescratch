<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
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
        if (!Auth::check()) { // Si l'utilisateur n'est pas authentifié
            return redirect('login')->with('error', 'Veuillez vous connecter pour accéder à cette page.');
        }

        return $next($request); // Continue vers la requête suivante si l'utilisateur est authentifié
    }
}
