<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome (Request $request )
    {
        $user = $request -> user();
        return view('slash', ['user' => $user]);
    }

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('welcome');
    }
}
