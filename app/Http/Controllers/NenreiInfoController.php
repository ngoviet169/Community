<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NenreiInfoController extends Controller
{
    public function index()
    {
        return view('front-end.nenrei-info.index');
    }
}
