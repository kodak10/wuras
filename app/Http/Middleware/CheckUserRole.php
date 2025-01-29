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
   

     public function handle(Request $request, Closure $next, $role)
     {
         // Vérifie si l'utilisateur est authentifié
         if (!Auth::check()) {
             abort(401, 'Non authentifié');
         }
 
         // Vérifie si l'utilisateur a le rôle requis
         $user = Auth::user();  // Utilise Auth::user() pour obtenir l'utilisateur
         if ($user->role !== $role) {
            abort(403, 'Accès interdit: vous n\'avez pas les autorisations nécessaires');
        }
 
         return $next($request);

         
     }
}
