@extends('layout')

@section('title', ' 新規登録（無料）')
@section('content')
    @if(isset($popup))
        <script>
            window.onload = function(){
                openPopup();
            };
        </script>
    @endif
    <script>
        function f_submit() {
            document.f_entry.submit();
        }
        function openPopup() {
          //  document.getElementById("msg_box_bg").style.visibility="visible";
            document.getElementById("msg_box_bg").style.display = "block";
            //document.f_entry.submit();
        }
    </script>
    <div id="popup">
        <div id="msg_box_bg" style="display:none">
            <div class="msg_box">
                <p>お客様のメールアドレス宛に本登録用のメールを送信しました。そちらから本登録へお進みください。</p>
                <a href="index.html" class="msg_close">メッセージを閉じる <span>&times;</span></a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="content-in">
            <section class="entry check-contents">
                <h2>DUMMY 新規登録（無料）</h2>
                <form method="post" name="f_entry" action="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="finalFormRegister" id="formRegister" value="true">
                    <p class="mb15">下記の内容で登録致します。<br />
                        宜しければ送信ボタンを、修正する場合は戻るボタンを押してください。</p>
                    <h3>登録内容</h3>
                    <div class="sex">
                        <dl>
                            <dt>あなたの性別</dt>
                            @if($sex == 1)
                                <dd id="sex">男性</dd>
                                <input type="hidden" name="sex" value="{{$sex}}">
                                @else
                                <dd id="sex">女性</dd>
                                <input type="hidden" name="sex" value="{{$sex}}">
                            @endif
                        </dl>
                    </div>
                    <!--
                    <dl>
                    <dt>タイトル（30文字以内）</dt>
                    <dd>タイトル_テスト</dd>
                    </dl>
                    <dl>
                    <dt>本文（200文字以内）</dt>
                    <dd>本文_テスト</dd>
                    </dl>
                    -->
                    <dl>
                        <dt>ニックネーム（全角7文字まで）</dt>
                        <dd>{{$nick_name}}</dd>
                        <input type="hidden" name="nick_name" value="{{$nick_name}}">
                    </dl>
                    <dl>
                        <dt>メールアドレス（お返事を受け取る為に必要です）</dt>
                        <dd>{{$mail}}</dd>
                        <input type="hidden" name="mail" value="{{$mail}}">
                    </dl>
                    <dl>
                        <dt>お住まいの地域を選択</dt>
                        @foreach($area1 as $ar1)
                            <dd>{{$ar1->area1_name}}</dd>
                            <input type="hidden" name="area1" value="{{$ar1->area1}}">
                        @endforeach
                    </dl>
                    <dl>
                        <dt>詳しい地域を選択</dt>
                        @if($area2_id == 0)
                            <dd>ひみつ</dd>
                        @else
                        @foreach($area2 as $ar2)
                            <dd>{{$ar2->area2_name}}</dd>
                                <input type="hidden" name="area2" value="{{$ar2->area2}}">
                        @endforeach
                        @endif
                    </dl>
                    <dl>
                        <dt>あなたの年齢</dt>
                        <dd>{{$age}}歳</dd>
                        <input type="hidden" name="age" value="{{$age}}">
                    </dl>
                    <dl>
                        <dt>出会いの目的</dt>
                        <?php
                            $objection_value = '';
                            switch ($objection) {
                                case 1: $objection_value = 'メル友から'; break;
                                case 2: $objection_value = 'すぐ会いたい'; break;
                                case 3: $objection_value = '趣味友'; break;
                                case 4: $objection_value = 'ひみつの関係'; break;
                                case 5: $objection_value = '恋愛関係'; break;
                                case 6: $objection_value = '癒し'; break;
                                case 7: $objection_value = '大人の関係'; break;
                                case 8: $objection_value = 'ひみつ'; break;
                            }
                            echo "<dd>$objection_value</dd>";
                        ?>
                        <input type="hidden" name="objection" value="{{$objection}}">
                    </dl>
                    <div class="btnbox-lr clearfix">
                        <div class="btn_m2">
                            <a href="{{route('register')}}">戻る</a>
                        </div>
                        <div class="btn_m">
                            <a href="javascript:f_submit();">送信</a>
                        </div>
                    </div>
                    <input type="hidden" name="mode" value="insert">
                    <input type="hidden" name="comments" value="未入力">
                </form>
            </section>
        </div>
    </div>
@endsection