<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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

        $user->name = '강해찬';
        $user->email = 'test@test.com';
        $user->password = Hash::make('password');
        $user->thumbnail = Storage::url('public/thumbnail/seWiGA9XWbAZk9mSglXbkERO8KbGDEzIJyDFKnHQ.svg');
        $user->birthday = "1999-07-13";
        $user->sex = 0;

        $user->save();
    }
}
