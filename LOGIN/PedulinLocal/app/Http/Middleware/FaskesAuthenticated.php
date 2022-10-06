<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaskesAuthenticated
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
        if ( $user->hasRole('user') ) {
            return redirect(route('dashboard'));
        }
        
        else if ( $user->hasRole('admin') ) {
            return redirect(route('admin_dashboard'));
        }
        // allow admin to proceed with request
        else if ( $user->hasRole('faskes') ) {
            return $next($request);
        }
    }
}