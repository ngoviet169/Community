@extends('layout')

@section('title', 'ログイン')
@section('content')

    <div class="content">
        <div class="content-in">
            <section class="login">
                <h2>DUMMY ログイン</h2>

                <div class="text-msg" align="center" style="font-size: 12px">
                    <font color="red">
                        @if (count($errors) > 0)
                            @if ($errors->has('login_id'))
                                {{$errors->first('login_id')}}
                            @else
                                {{$errors->first('login_pass')}}
                            @endif
                        @endif
                        {{$message or ""}}
                    </font>
                </div>
                <form method="post" action="{{route('login')}}" name="F1">
                    {{csrf_field()}}
                    <div>
                        <dl>
                            <dt>メールアドレス又はID</dt>
                            <dd>
                                <input name="login_id" id="login_id" type="text"
                                       value="{{Request::input('login_id')}}">
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl>
                            <dt>PASS</dt>
                            <dd>
                                <input name="login_pass" type="password" id="login_pass" maxlength="14"
                                       value="{{Request::input('login_pass')}}">
                            </dd>
                        </dl>
                    </div>
                    <div class="check">
                        <input type="checkbox" name="remember" class="che" value="1">
                        <span class="f120">ID・パスワードを記憶する</span>
                    </div>
                    <div class="btn_m">
                        <a href="javascript:go_submit()" onClick="disp()">ログイン</a>
                    </div>
                    <input type="hidden" name="login_mode" value="1">
                    <p>※ログイン情報をお忘れの場合は、サポートまで<a href="support.html">お問合わせ</a>ください。<br>
                        ※お問合せの際は、ご登録のメールアドレスにて確認を行いますので、お間違いのないようにお願い致します。</p>
                </form>
            </section>

            <div class="entrybox">
                <h3 class="fc1">みんなと繋がるマッチングSNSを今すぐ試そう！</h3>
                <div class="btn_m"><input type="submit" name="submitLogin" value="無料で試してみる"></div>
                <p>※18歳未満の方は利用できません。</p>
            </div>
        </div>
    </div>
@endsection