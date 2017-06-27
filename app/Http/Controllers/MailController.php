<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('front-end.jyusin.index');
    }

    public function jyusin2()
    {
        return view('front-end.jyusin.jyusin2');
    }

    public function jyusin3()
    {
        return view('front-end.jyusin.jyusin3');
    }

    public function sousin()
    {
        return view('front-end.jyusin.sousin');
    }
}
