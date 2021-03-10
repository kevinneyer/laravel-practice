<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome ()
    {
        return view('slash');
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
