<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gaji extends Controller
{
    public function index()
    {
        return view('gaji');
    }
}
