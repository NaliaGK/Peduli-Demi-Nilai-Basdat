<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'tempat_lahir'=> ['nullable', 'string', 'max:255'],
            'nik' => ['nullable', 'numeric', 'min:12'],
            'email' => ['nullable', 'string', 'email', 'unique:users'],
            'alamat'=> ['nullable', 'string', 'max:255'],
            'subscription'=>['nullable'],
            'mobile'=> ['nullable', 'numeric', 'unique:users', 'min:8'],
            'password' => ['nullable', 'required', 'confirmed', Rules\Password::defaults()],
        ]);
    }

    protected function create(array $data)
    {
        return User::create(([
            
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'tempat_lahir'=> $data['tempat_lahir'],
            'nik' => $data['nik'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'account_type'=> 0,
            'subscription'=> 0,
            'alamat'=>$data['alamat'],
            'mobile'=>$data['mobile'],
            'role'=>$data['role']

        ]));
    }
}
