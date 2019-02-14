<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarterController extends Controller
{
    public function starter() 
    {
        return view('starter');
    }
}
