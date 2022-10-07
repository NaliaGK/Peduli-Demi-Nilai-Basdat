<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request)
    // {
    // };
    
        event(new Registered($user));

        Auth::login($user);

        if ($request -> role = "admin") {
            return redirect(RouteServiceProvider::ADMIN_HOME);

        } elseif ($request -> role = "faskes") {
            return redirect(RouteServiceProvider::FASKES_HOME);

        } elseif ($request -> role = "user") {
            return redirect(RouteServiceProvider::HOME);   
        }
    }
}
