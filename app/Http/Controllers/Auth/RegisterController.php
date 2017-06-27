<?php

namespace App\Http\Controllers\Auth;

use App\Models\Area;
use App\Models\Member;
use App\Models\Validation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function showRegistrationForm(Request $request)
    {
        $areas_1 = Area::groupBy('area1_name')->orderBy('area1', 'asc')->get();
        $areas_2 = Area::where('area1', 1)->get();

        $nick_name = $request->nick_name;
        $sex = $request->sex;
        $mail = $request->mail;
        $area1_id = $request->area1;
        $area1 = Area::groupBy('area1_name')->where('area1', $area1_id)->get();
        $area2_id = $request->area2;
        $area2 = Area::where('area1', $area1_id)->where('area2', $area2_id)->get();
        $age = $request->age;
        $objection = $request->objection;

        if (isset($request->formRegister) && $request->formRegister == "true") { //check data post with register form
            if ($this->validateData($nick_name, $mail) == "") {

                return view('auth.entry_check', compact('nick_name', 'sex', 'mail', 'area1', 'area2', 'area2_id', 'age', 'objection'));
            } else {
                $msg = $this->validateData($nick_name, $mail);

                return view('auth.register', ['areas_1' => $areas_1, 'areas_2' => $areas_2, 'msg' => $msg, 'nick_name' => $nick_name, 'mail' => $mail]);
            }
        } else if (isset($request->finalFormRegister) && $request->finalFormRegister == "true") { //check data post with entry_check form
            $this->insertData2($nick_name, $sex, $mail, $area1_id, $area2_id, $age, $objection);
            $popup = true;

            return view('auth.entry_check', compact('nick_name', 'sex', 'mail', 'area1', 'area2', 'area2_id', 'age', 'objection', 'popup'));
        } else {

            return view('auth.register')->with(compact('areas_1', 'areas_2', 'nick_name', 'mail'));
        }
    }

    //validate user login
    public function validateData($nick_name, $mail)
    {
        $msg = "";
        //check nickname is japanese or null or nickname > 7
        if (strlen($nick_name) < 1 || !$this->isJapanese($nick_name) || strlen($nick_name) > 21) {
            $msg .= "※ニックネームを入力してください";
        }

        $re = '/^[a-zA-z0-9]+@[a-zA-z0-9]+\.[a-zA-z0-9]$/';
        $check_mail = preg_match($re, $mail);
        $mail = Member::where('mail2', $mail)->get();
        if (count($mail) > 0 || count($check_mail) < 1) {
            $msg .= '\n' . "※PCメールアドレスは既に使用されています";
        }

        return $msg;
    }

    function isKanji($str)
    {
        return preg_match('/[\x{4E00}-\x{9FBF}]/u', $str) > 0;
    }

    function isHiragana($str)
    {
        return preg_match('/[\x{3040}-\x{309F}]/u', $str) > 0;
    }

    function isKatakana($str)
    {
        return preg_match('/[\x{30A0}-\x{30FF}]/u', $str) > 0;
    }

    function isJapanese($str)
    {
        return $this->isKanji($str) || $this->isHiragana($str) || $this->isKatakana($str);
    }

    //insert data to database
    public function insertData2($nick_name, $sex, $mail, $area1, $area2, $age, $objection)
    {
        //$this->setMemberData();
        $loginId = $this->getNewLoginId();
        $login_pass = md5(rand(10000, 99999));
        $hash = substr(md5("0fb" . $loginId . time()), 1, 15);

        ///
        DB::table('member_all')->insert([
            'login_id' => $loginId,
            'nick_name' => $nick_name,
            'login_pass' => $login_pass,
            'hash' => $hash,
            'sex' => $sex,
            'mail2' => $mail,
            'area1' => $area1,
            'area2' => $area2,
            'age' => $age,
            'objection' => $objection,
            'stat' => '0',
            'attribute' => '0',
            'carrier' => '0',
            'entry_type' => '2',
            'user_type' => '1',
            'title' => 'はじめまして',
            'body' => 'よろしくお願いします',
//            'cre_ip' => Request::getClientIp(),
//            'cre_date' => now()
        ]);

        $email = DB::table('member_all')->select('mail2', 'nick_name')->where('login_id', $loginId)->get();
        $link = route('confirm-account');

        Mail::send('mail.view-mail', ['hash' => $hash, 'link' => $link], function ($m) use ($email) {
            $m->from('ngoabcd442@gmail.com', 'DUMMY');

            $m->to($email[0]->mail2, $email[0]->nick_name)->subject('Active account');
        });
    }

    //confirm account with uid in email (method get)
    public function confirmAccount($uid, Request $request)
    {
        $hash = DB::table('member_all')->select('hash')->get();

        foreach ($hash as $value) {
            if ($uid == $value->hash) {
                DB::table('member_all')->where(['hash' => $uid, 'stat' => 0])->update(['stat' => 1]);
                DB::table('member_all')->where('hash', $uid)->update([
                    'cre_date' => new Carbon(),
                    'cre_ip' => $request->ip(),
                ]);

                //login with uid if stat = 2(confirm 18+)
                if($this->loginWithUid($value->hash)) {

                    return redirect()->route('profile');
                }

                return view('front-end.nenrei-info.index');
            }
        }
        return view('front-end.errors.errors');
    }

    //login with uid if stat = 2(confirm 18+)
    public function loginWithUid($hash)
    {
        $flg = false;
        $login = Member::where(['hash' => $hash, 'stat' => 2])->first();
        if ($login) {
            Auth::login($login, true);
            $flg = true;
        }

        return $flg;
    }

    //auto create new loginId
    public function getNewLoginId()
    {
        $login_flg = false;
        $login_id = null;
        while ($login_flg == false) {
            $rand_num = sprintf("%05d", rand(000000, 999999));
            $login_id = $this->getLandId(rand(0, 25), rand(0, 25)) . $rand_num;
            $result = Member::where('login_id', $login_id)->get();
            if (count($result) < 1) {
                $login_flg = true;
            }
        }
        return $login_id;
    }

    function getLandId($no1, $no2)
    {

        $id = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
            'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v',
            'w', 'x', 'y', 'z');

        $name = $id[$no1] . $id[$no2];
        return $name;
    }

    // insert data to show in file check_entry after submit
    public function insertData(Request $request)
    {
        $nick_name = $request->nick_name;
        $sex = $request->sex;
        $mail = $request->mail;
        $area1 = $request->area1;
        $area2 = $request->area2;
        $age = $request->age;
        $objection = $request->objection;
        DB::table('member_all')->insert([
            'nick_name' => $nick_name,
            'sex' => $sex,
            'mail2' => $mail,
            'area1' => $area1,
            'area2' => $area2,
            'age' => $age,
            'objection' => $objection,
        ]);
    }

    //select area in register form
    public function ajaxSelectArea($id)
    {
        $areas = Area::where('area1', $id)->get();
        return $areas;
    }
}
