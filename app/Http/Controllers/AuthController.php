<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
    }

    public function logout()
    {
        Auth::logout();
    }

    public function signup(Request $request)
    {

        $user = new User;

        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/');
    }
}
