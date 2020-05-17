<?php

use Illuminate\Database\Seeder;
use App\User;

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

        $user->name = "강해찬";
        $user->email = "test@test.com";
        $user->password = Hash::make("password");

        $user->save();
    }
}
