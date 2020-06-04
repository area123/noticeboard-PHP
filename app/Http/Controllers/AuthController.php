<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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

        if (Auth::attempt($user)) {
            return redirect()->route('home');
        }

        return redirect()->route('login');
    }

    function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

    function check(Request $request)
    {
        try {
            $user = User::where('email',$request->email)->firstOrFail();
            return response()->json([
                'success'=> false
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success'=> true
            ]);
        }
    }
}
