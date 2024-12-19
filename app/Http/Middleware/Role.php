<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
       
        if (!Auth::check()) {
            return redirect()->route('sign-in');
        }

        $authRole = Auth::user()->role;
        if ($authRole !== $role) {
            return redirect()->route("{$authRole}about"); // Redirect to the appropriate dashboard
        }

        return $next($request);
    }
}
