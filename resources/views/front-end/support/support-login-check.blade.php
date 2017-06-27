@extends('layout')

@section('title', 'お問い合わせ')
@if(isset($popup))
    <script>
        window.onload = function () {
            openPopup();
        };
    </script>
@endif
    <script>
        function openPopup() {
            document.getElementById("msg_box_bg").style.display = "block";
        }

        function closePopup() {
            document.getElementById("msg_box_bg").style.display = "none";
        }

        function go_submit() {
            alert('abcd');
            document.forms('support-check').submit();
        }
    </script>
@section('content')
    <div id="popup">
        <div id="msg_box_bg" style="display:none">
            <div class="msg_box">
                <p>・送信が完了しました。<br>
                    内容を確認次第、担当より連絡をさせていただきます。</p>
                <a href="javascript:closePopup()" class="msg_close">メッセージを閉じる <span>&times;</span></a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="content-in clearfix">

            @include('front-end.commons.sidebar')

            <div class="main">
            <section class="check-contents">
                <h2>DUMMY お問い合わせ</h2>
                <form method="post" action="{{route('support-check')}}" name="support-check">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="formSupport" id="formSupport" value="true">
                    <h3>お問い合わせフォーム</h3>
                    <dl>
                        <dt>ニックネーム</dt>
                        <dd>{{$nick_name}}</dd>
                        <input type="hidden" value="{{$nick_name}}" name="nick_name">
                    </dl>
                    <div class="sex">
                        <dl>
                            <dt>あなたの性別</dt>
                            <dd>
                                @if($sex == 1)
                                    {{'男性'}}
                                @else
                                    {{'女性'}}
                                @endif
                            </dd>
                        </dl>
                    </div>
                    <div class="member">
                        <dl>
                            <dt>会員登録の有無</dt>
                            <dd>
                                @if($member == 1)
                                    {{"会　員"}}
                                    <input type="hidden" name="member" id="member" value="1">
                                @else
                                    {{"非会員"}}
                                    <input type="hidden" name="member" id="member" value="2">
                                @endif
                            </dd>
                        </dl>
                    </div>
                    <dl>
                        <dt>メールアドレス</dt>
                        <dd>{{$mail2}}</dd>
                        <input type="hidden" value="{{$mail2}}" name="mail2">
                    </dl>
                    <dl>
                        <dt>サポート項目</dt>
                        <dd>
                            <?php
                            switch ($subject) {
                                case 1:
                                    echo "ポイントについて";
                                    break;
                                case 2:
                                    echo "利用方法について";
                                    break;
                                case 3:
                                    echo "設定変更について";
                                    break;
                                case 4:
                                    echo "ログイン情報を忘れた";
                                    break;
                                case 5:
                                    echo "退会手続きについて";
                                    break;
                                case 6:
                                    echo "専属サポート";
                                    break;
                                case 7:
                                    echo "その他お問い合わせ";
                                    break;
                            }
                            ?>
                            <input type="hidden" value="{{$subject}}" name="subject">
                        </dd>
                    </dl>
                    <dl>
                        <dt>内容</dt>
                        <dd>{{$naiyou}}</dd>
                        <input type="hidden" value="{{$naiyou}}" name="naiyou">
                    </dl>
                    <div class="btnbox-lr clearfix">
                        <div class="btn_m2">
                            <a href="javascript:history.back();">戻る</a>
                        </div>
                        <div class="btn_m"><input type="submit" name="button" value=" 送信 "></div>
                    </div>
                    <input type="hidden" name="mode" value="insert">
                </form>
            </section>
        </div>
        </div>
    </div>
@endsection