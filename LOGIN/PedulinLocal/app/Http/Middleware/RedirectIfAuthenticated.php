<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                /** @var User $user */
                $user = Auth::guard($guard);
                $role = Auth::user()->role;
                var_dump($role);

                // to admin dashboard
                if($role = 'admin') {
                    return redirect(route('dashboard'));
                }

                // to faskes dashboard
                else if($role = 'user') {
                    return redirect(route('faskes_dashboard'));
                }

                // to user dashboard
                else if($user->hasRole('user')) {
                    return redirect(route('dashboard'));
                }
            }
        }

        return $next($request);
    }
}