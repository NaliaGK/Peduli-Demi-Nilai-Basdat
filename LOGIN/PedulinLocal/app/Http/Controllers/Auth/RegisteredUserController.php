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
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'tempat_lahir'=> ['required', 'string', 'max:255'],
            'nik' => ['required', 'numeric', 'min:12'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'alamat'=> ['required', 'string', 'max:255'],
            'subscription'=>['nullable'],
            'mobile'=> ['numeric', 'unique:users', 'min:8'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'role'=>$request -> role,
            'first_name' => $request -> first_name,
            'last_name' => $request -> last_name,
            'tempat_lahir'=> $request -> tempat_lahir,
            'nik' => $request -> nik,
            'email' => $request -> email,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'account_type'=> 0,
            'subscription'=> $request -> subscription,
            'alamat'=>$request -> alamat,
            'mobile'=>$request -> mobile,

        ]);

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
