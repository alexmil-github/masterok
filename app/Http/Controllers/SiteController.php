<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function loginForm()
    {
        return view('login');
    }
    public function reg()
    {
        return view('reg');
    }
}
