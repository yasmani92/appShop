<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
       User::create([

            'name' => 'Yancarlos',
            'email' => 'yferrera@gmail.com',
            'password' => bcrypt('12qwas'),
            'admin' => true
       ]);
    }
}
