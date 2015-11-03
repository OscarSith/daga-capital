<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create(['name' => 'admin', 'email' => 'admin@daga.com', 'password' => bcrypt('123456')]);
    }
}