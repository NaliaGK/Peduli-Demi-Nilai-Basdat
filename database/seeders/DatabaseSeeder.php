<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'first_name'=>'Steven',
               'last_name'=>'William',
               'nik'=>'31748980002',
               'email'=>'admin@test.com',
               'password'=> bcrypt('adminadmin'),
               'role'=>'1',
               'subscription'=>'1',
               'alamat'=>'Kali kepiting',
               'mobile'=>'082113844952',
            ],
            [
                'first_name'=>'Michael',
                'last_name'=>'William',
                'nik'=>'31748980003',
                'email'=>'user@test.com',
                'password'=> bcrypt('useruser'),
                'role'=>'0',
                'subscription'=>'0',
                'alamat'=>'Kali kepiting',
                'mobile'=>'082113844953',
             ],
        ];
  
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
