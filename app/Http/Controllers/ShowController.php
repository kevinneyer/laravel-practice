<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    //
    public function show($id)
    {
        return view('showpage', [
            'id' => $id
        ]);
    }
}
