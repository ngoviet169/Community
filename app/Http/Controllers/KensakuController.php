<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KensakuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('front-end.kensaku.index');
    }
}
