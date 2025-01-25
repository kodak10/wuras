<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   

    public function handle(Request $request, Closure $next)
    {
        // Vérifier si l'utilisateur est authentifié et possède un des rôles autorisés
        if (Auth::check() && in_array(Auth::user()->role, ['admin', 'manager', 'employee'])) {
            return $next($request); // Autoriser l'accès si le rôle est valide
        }

        // Rediriger vers la page d'accueil ou autre page si l'utilisateur n'a pas le rôle requis
        return redirect('/');
    }
}
