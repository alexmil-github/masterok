<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);


        if(Auth::attempt($request->only(['login', 'password'])))
            return redirect('/');
        return back()->withErrors([
            'login' => 'Login or password incorrect'
        ]);
    }

    public function registration(Request $request)
    {
        $user = User::create([
            'email'    => $request->input('email'),
            'fio'     => $request->input('fio'),
            'login'     => $request->input('login'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()
            ->route('home')
            ->with('success', 'Вы успешно зарегистрировались');
    }

    public function logout ()
    {
        Auth::logout();
        return redirect()->route( 'login' );
    }
}
