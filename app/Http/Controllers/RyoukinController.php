<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RyoukinController extends Controller
{
    public function index()
    {
        return view('front-end.ryoukin.index');
    }
}
