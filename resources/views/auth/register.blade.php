@extends('layout')

@section('title', ' 新規登録（無料）')
@section('content')
    @if(isset($msg)) {
        <script>
            alert("<?php echo nl2br($msg); ?>");
        </script>
    }
    @endif
<script>
    $(document).ready(function(){
        $('#area1').change(function(){
            var id = $(this).val();
            $.get('ajaxSelectArea/'+id, function(data){
                $('#area2').empty();
                //    var data_array = JSON.parse(data);
                $.each(data, function (index, area) {
                    $('#area2').append('<option value="' + area.area2 + '">' + area.area2_name + '</option>');
                });
                $('#area2').val(localStorage['area2']);
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        var input = document.getElementById('area2');
        if (localStorage['area2']) { // if job is set
            input.value = localStorage['area2']; // set the value
        }
        input.onchange = function () {
            localStorage['area2'] = this.value; // change localStorage on change
        }
    });

    function checkDouiItems(){
        oElements = document.getElementsByName("doui");
        for(i=0;i<oElements.length;i++){
            if(oElements[i].checked){
                return true;
            }
        }
        return false;
    }

    function func_submit(){
        var nick_name = document.getElementById('nick_name').value;
        var mail = document.getElementById('mail').value;
        var objection = document.getElementById('objection').value;
        var msg = "";

        var re_nick_name = /[\u3000-\u303F]|[\u3040-\u309F]|[\u30A0-\u30FF]|[\uFF00-\uFFEF]|[\u4E00-\u9FAF]|[\u2605-\u2606]|[\u2190-\u2195]|\u203B/g;
        var re_mail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(!checkDouiItems()){
            alert("「利用規約に同意します」にチェックを入れてください。");
            return;
        }

        if (!re_nick_name.test(nick_name) || nick_name == "") {
           msg = msg + '※ニックネームを入力してください';
        }

        if (!re_mail.test(mail) || mail == "") {
            msg = msg  + '\n※PCメールが不正です';
        }

        if (objection == 0) {
            msg = msg + '\n※目的を選択して下さい';
        }

        if(msg != "") {
            alert(msg);
            return;
        }

        document.f_entry.submit();
    }

    function go_alertmsg(){
    }
</script>
<div class="content">
    <div class="content-in">
        <section class="entry">
            <h2>DUMMY 新規登録（無料）</h2>
            <form method="post" name="f_entry" action="{{route('register_check')}}">
                <input type="hidden" name="formRegister" id="formRegister" value="true">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <p class="mb15">DUMMYをご利用いただくには会員登録（無料）が必要です。下記の専用フォームに必要項目を入力して下さい。<br/>
                    お客様が入力したアドレス宛てに本登録用のメールが送信されますので、DUMMYからのメールを受信できるよう予め受信設定のご確認をお願い致します。<br/>
                    <span>※本登録用のメールが届かない場合は<a href="support.html">コチラ</a></span></p>
                <h3>会員登録フォーム</h3>
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

                <dl>
                    <dt>ニックネーム（全角7文字まで）</dt>
                    <dd>
                        <input type="text" name="nick_name" id="nick_name" maxlength="7" value="{{$nick_name}}">
                    </dd>
                </dl>
                <dl>
                    <dt>メールアドレス（お返事を受け取る為に必要です）</dt>
                    <dd>
                        <input type="text" name="mail" id="mail" value="{{$mail}}">
                    </dd>
                </dl>
                <div class="moreinfo clearfix">
                    <dl>
                        <dt>お住まいの地域を選択</dt>
                        <dd>
                            <select name="area1" id="area1">
                            @foreach($areas_1 as $area)
                                <option value="{{$area->area1}}">{{$area->area1_name}}</option>
                            @endforeach
                            </select>
                        </dd>
                    </dl>
                    <dl>
                        <dt>詳しい地域を選択</dt>
                        <dd>
                            <select name="area2" id="area2">
                                <option value="0" selected="">ひみつ</option>
                            @foreach($areas_2 as $area)
                                <option value="{{$area->area2}}">{{$area->area2_name}}</option>
                            @endforeach
                            </select>
                        </dd>
                    </dl>
                    <dl>
                        <dt>あなたの年齢</dt>
                        <dd>
                            <select name="age">
                                @for($i = 18; $i <60; $i++)
                                    <option value="<?php echo $i;?>"><?php echo $i;?>歳</option>
                                @endfor
                                <option value="60">60歳以上</option>
                            </select>
                        </dd>
                    </dl>
                    <dl>
                        <dt>出会いの目的</dt>
                        <dd>
                            <select name="objection" id = "objection" onchange="chg_objection()">
                                <option value="0" selected="">未選択</option>
                                <option value="1">メル友から</option>
                                <option value="2">すぐ会いたい</option>
                                <option value="3">趣味友</option>
                                <option value="4">ひみつの関係</option>
                                <option value="5">恋愛関係</option>
                                <option value="6">癒し</option>
                                <option value="7">大人の関係</option>
                                <option value="8">ひみつ</option>
                            </select>
                        </dd>
                    </dl>
                </div>
                <div class="check">
                    <input type="checkbox" name="doui" class="che" value="1" checked="">
                    <span class="f120">私は18歳以上で<a href="kiyaku.html" target="_blank">利用規約</a>・メール配信に同意します。</span>
                </div>
                <div class="btn_l2">
                    <a href="javascript:func_submit();">この内容で登録する</a>
                </div>
                <input type="hidden" name="mode" value="insert">
                <input type="hidden" name="comments" value="未入力">
            </form>
        </section>
    </div>
</div>
@endsection