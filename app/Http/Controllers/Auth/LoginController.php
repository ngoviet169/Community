<?php

namespace App\Http\Controllers\Auth;

use App\Models\Member;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function guard()
    {
        return 'member';
    }


    public function login(Request $request)
    {
        $this->validate($request,
            [

                'login_id' => 'required',
                'login_pass' => 'required'
            ],
            [
                'login_id.required' => 'メールアドレス又はパスワードが異なります',
                'login_pass.required' => 'ID又はパスワードが異なります'
            ]
        );

        $username = $request->login_id;
        $password = md5($request->login_pass);
        $now = new Carbon();

        $user = Member::where(['login_id' => $username, 'login_pass' => $password])->orWhere(['mail2' => $username, 'login_pass' => $password])->first();
        if ($user) {
            Auth::login($user, $request->has('remember'));
            DB::table('member_all')->where('login_id', $username)->update(['last_login' => $now]); //set last_login

            return redirect()->route('home');
        } else {
            $message = 'メールアドレス又はパスワードが異なります';
            return view('auth.login')->with(compact("message"));
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }
}
