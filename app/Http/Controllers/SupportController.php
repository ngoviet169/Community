<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $nick_name = Auth::user()->nick_name;
            $sex = Auth::user()->sex;
            $mail = Auth::user()->mail2;
            return view('front-end.support.support-login')->with(compact('nick_name', 'sex'));
        }
        return view('front-end.support.index');
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function handle(Request $request)
    {
        $this->validate($request,
            [
                'nick_name' => 'required',
                'mail2' => 'required|email',
                'naiyou' => 'required'
            ],
            [
                'nick_name.required' => 'メールアドレスを入力してください',
                'mail2.required' => 'お名前を入力してください',
                'mail2.email' => 'メールが不正です',
                'naiyou.required' => '内容を入力してください',
            ]
        );

        $nick_name = $request->nick_name;
        $sex = $request->sex;
        $member = $request->member;
        $mail2 = $request->mail2;
        $subject = $request->subject;
        $naiyou = $request->naiyou;
        $popup = true;
        $cre_date = new Carbon();
        if (isset($request->formSupport) && $request->formSupport == true) {
            Support::insert([
                'mail' => $mail2,
                'nick_name' => $nick_name,
                'subject' => $subject,
                'naiyou' => $naiyou,
                'cre_date' => $cre_date,
                'cre_ip' => $request->ip(),
            ]);
            if(Auth::check()) {

                return view('front-end.support.support-login-check')->with(compact('nick_name', 'sex', 'member', 'mail2', 'subject', 'naiyou', 'popup'));
            }

            return view('front-end.support.support-check')->with(compact('nick_name', 'sex', 'member', 'mail2', 'subject', 'naiyou', 'popup'));
        } else {
            if(Auth::check()) {

                return view('front-end.support.support-login-check')->with(compact('nick_name', 'sex', 'member', 'mail2', 'subject', 'naiyou'));
            }

            return view('front-end.support.support-check')->with(compact('nick_name', 'sex', 'member', 'mail2', 'subject', 'naiyou'));
        }
    }
}