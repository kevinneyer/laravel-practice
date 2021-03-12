<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    //
    public function index ()
    {
        return view('favorites');
    }

    public function store(Request $request)
    {
        $Title = $request->Title;
        $Year = $request->Year;
        $imdbID = $request->imdbID;
        $Type = $request->Type;
        $Poster = $request->Poster;
        $user_id = $request->user_id;

    }
}
