@extends('layout')

@section('title', 'お問い合わせ')
@section('content')
    <div class="content">
        <div class="content-in">
            <section class="support">
                <h2>DUMMY お問い合わせ</h2>
                <form method="post" action="{{route('support')}}" name="F1">
                    {{csrf_field()}}
                    <div class="text-msg">
                        <center style="margin-bottom:10px">
                            <font color="red" size="-1">
                                @if (count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                        {{$error}}</br>
                                    @endforeach
                                @endif
                            </font>
                        </center>
                    </div>
                    <h3>お問い合わせフォーム</h3>
                    <dl>
                        <dt>ニックネーム</dt>
                        <dd>
                            <input type="text" name="nick_name" id="nick_name" value="">
                        </dd>
                    </dl>
                    <div class="sex">
                        <dl>
                            <dt>あなたの性別</dt>
                            <dd class="clearfix">
<span>
<input type="radio" name="sex" value="1" id="radio01" checked="">
<label for="radio01" class="radio">男性</label>
</span>
                                <span>
<input type="radio" name="sex" value="2" id="radio02">
<label for="radio02" class="radio">女性</label>
</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="member">
                        <dl>
                            <dt>会員登録の有無</dt>
                            <dd class="clearfix">
<span>
<input type="radio" name="member" value="1" id="radio03">
<label for="radio03" class="radio">会　員</label>
</span>
                                <span>
<input type="radio" name="member" value="2" id="radio04">
<label for="radio04" class="radio">非会員</label>
</span>
                            </dd>
                        </dl>
                    </div>
                    <dl>
                        <dt>メールアドレス</dt>
                        <dd>
                            <input type="email" name="mail2" id="mail2" value="">
                        </dd>
                    </dl>
                    <dl>
                        <dt>サポート項目</dt>
                        <dd>
                            <select name="subject">
                                <option value="4" selected="">ログイン情報を忘れた</option>
                                <option value="2">利用方法について</option>
                                <option value="3">設定変更について</option>
                                <option value="1">ポイントについて</option>
                                <option value="5">退会手続きについて</option>
                                <option value="6">専属サポート</option>
                                <option value="7">その他お問い合わせ</option>
                            </select>
                        </dd>
                    </dl>
                    <dl>
                        <dt>内容</dt>
                        <dd>
                            <textarea name="naiyou" id="naiyou"></textarea>
                        </dd>
                    </dl>
                    <div class="btnbox-lr clearfix">
                        <div class="btn_m2"><input type="reset" name="reset" value=" リセット "></div>
                        <div class="btn_m">
                            <input type="button" name="button" value="　送信　"
                                   onclick="JavaScript:go_submit();return false;">
                        </div>
                    </div>
                    <input type="hidden" name="mode" value="insert">
                </form>
            </section>
        </div>
    </div>
    <div class="entrybox">
        <h3 class="fc1">みんなと繋がるマッチングSNSを今すぐ試そう！</h3>
        <div class="btn_m"><a href="entry.html">無料で試してみる</a></div>
        <p>※18歳未満の方は利用できません。</p>
    </div>
@endsection