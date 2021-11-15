<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "User 1";
        $user->email = "user1@gmail.com";
        $user->password = Hash::make(12345);
        $user->save();


        $user = new User();
        $user->name = "User 2";
        $user->email = "user2@gmail.com";
        $user->password = Hash::make(12345);
        $user->save();
    }
}
