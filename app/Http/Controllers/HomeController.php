<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome (Request $request )
    {   
        $user = $request -> user();
        if($user){
            return view('slash', ['user' => $user]);
        } else {
            return view('welcome');
        } 
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
