<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class noeController extends Controller
{
    public function showIndex()
    {
        return view('noe');
    }
}