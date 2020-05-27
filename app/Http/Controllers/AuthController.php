<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register(Request $request)
    {
        $user = new User();

        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        return view('index');
    }

    function login(Request $request)
    {
        $user = $request->only('email', 'password');

        User::where('email', $request->email)->first();

        if (Auth::attempt($user)) {
            return view('index',[
                'name'=>User::where('email', $request->email)->first()->name
            ]);
        }
    }

    function logout()
    {
        Auth::logout();

        return view('index');
    }
}
