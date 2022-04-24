<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(["username" => "user1", "email" => "test1@test.com", "password" => "password1", "money" => 500]);
        User::create(["username" => "user2", "email" => "test2@test.com", "password" => "password2", "money" => 500]);
        User::create(["username" => "user3", "email" => "test3@test.com", "password" => "password3", "money" => 500]);
        User::create(["username" => "user4", "email" => "test4@test.com", "password" => "password4", "money" => 500]);
        User::create(["username" => "user5", "email" => "test5@test.com", "password" => "password5", "money" => 500]);
    }
}
