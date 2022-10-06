<?php

namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'tempat_lahir'=> fake()->city(),
                'nik' => fake()->numerify('############'),
                'email' => fake()->unique()->safeEmail(),
                'password' => Str::random(5), // password
                'remember_token' => Str::random(10),
                'subscription'=> fake()->boolean(0),
                'alamat'=>fake()->streetAddress(),
                'mobile'=>fake()->phoneNumber(),
            ]
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
