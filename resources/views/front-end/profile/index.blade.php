@extends('layout')
@section('title', 'プロフィール編集')
    @section('content')
    <!-- /hd -->
    <!-- content -->
    <div class="content">
        <div class="content-in clearfix">
            <!-- side -->
            @include('front-end.commons.sidebar')
            <!-- /side -->
            <!-- main -->
            <div class="main">
            <!--
<section class="banner">
<a href=""><img src="img/img_banner01@2x.png" alt=""></a>
</section>
-->
                <section class="profile">
                    <h2>プロフィール編集</h2>
                    <div class="areabox">
                        <p>地域：神奈川県</p>
                        <p>地域詳細：横浜市泉区</p>
                    </div>
                    <form name="F1" method="post">
                        <dl>
                            <dt><label for="nick_name">ニックネーム (全角7文字以内)</label></dt>
                            <dd><input type="text" name="nick_name" id="nick_name" maxlength="14" istyle="1" mode="hiragana" format="14M" value="ラビ"></dd>
                        </dl>
                        <div class="moreinfo clearfix">
                            <dl>
                                <dt><label for="age">年齢</label></dt>
                                <dd>
                                    <select name="age" id="age">
                                        <option value="18">18歳</option>
                                        <option value="19">19歳</option>
                                        <option value="20">20歳</option>
                                        <option value="21">21歳</option>
                                        <option value="22">22歳</option>
                                        <option value="23">23歳</option>
                                        <option value="24">24歳</option>
                                        <option value="25">25歳</option>
                                        <option value="26">26歳</option>
                                        <option value="27">27歳</option>
                                        <option value="28" selected="">28歳</option>
                                        <option value="29">29歳</option>
                                        <option value="30">30歳</option>
                                        <option value="31">31歳</option>
                                        <option value="32">32歳</option>
                                        <option value="33">33歳</option>
                                        <option value="34">34歳</option>
                                        <option value="35">35歳</option>
                                        <option value="36">36歳</option>
                                        <option value="37">37歳</option>
                                        <option value="38">38歳</option>
                                        <option value="39">39歳</option>
                                        <option value="40">40歳</option>
                                        <option value="41">41歳</option>
                                        <option value="42">42歳</option>
                                        <option value="43">43歳</option>
                                        <option value="44">44歳</option>
                                        <option value="45">45歳</option>
                                        <option value="46">46歳</option>
                                        <option value="47">47歳</option>
                                        <option value="48">48歳</option>
                                        <option value="49">49歳</option>
                                        <option value="50">50歳</option>
                                        <option value="51">51歳</option>
                                        <option value="52">52歳</option>
                                        <option value="53">53歳</option>
                                        <option value="54">54歳</option>
                                        <option value="55">55歳</option>
                                        <option value="56">56歳</option>
                                        <option value="57">57歳</option>
                                        <option value="58">58歳</option>
                                        <option value="59">59歳</option>
                                        <option value="60">60歳以上</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="blood">血液型</label></dt>
                                <dd>
                                    <select name="blood" id="blood">
                                        <option value="0" selected="">A型</option>
                                        <option value="1">B型</option>
                                        <option value="2">O型</option>
                                        <option value="3">AB型</option>
                                        <option value="4">不明</option>
                                        <option value="5">ひみつ</option></select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="height">身長</label></dt>
                                <dd>
                                    <select name="height" id="height">
                                        <option value="0" selected="">～145</option>
                                        <option value="1">146～155</option>
                                        <option value="2">156～165</option>
                                        <option value="3">166～175</option>
                                        <option value="4">176～185</option>
                                        <option value="5">186～195</option>
                                        <option value="6">196～</option>
                                        <option value="7">不明</option>
                                        <option value="8">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="style">体型</label></dt>
                                <dd>
                                    <select name="style" id="style">
                                        <option value="0" selected="">小柄</option>
                                        <option value="1">スリム</option>
                                        <option value="2">標準</option>
                                        <option value="3">ナイスボディー</option>
                                        <option value="4">少しポッチャリ</option>
                                        <option value="5">ポッチャリ</option>
                                        <option value="6">大柄</option>
                                        <option value="7">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="job">職業</label></dt>
                                <dd>
                                    <select name="job" id="job">
                                        <option value="1">学生</option>
                                        <option value="2">ﾌﾘｰﾀｰ</option>
                                        <option value="3">会社員</option>
                                        <option value="4" selected="">会社役員</option>
                                        <option value="5">会社経営</option>
                                        <option value="6">公務員</option>
                                        <option value="7">ｻｰﾋﾞｽ業</option>
                                        <option value="8">自営業</option>
                                        <option value="9">医療関係</option>
                                        <option value="10">建設関係</option>
                                        <option value="11">音楽関係</option>
                                        <option value="12">運送関係</option>
                                        <option value="13">IT関係</option>
                                        <option value="14">専門職</option>
                                        <option value="15">その他</option>
                                        <option value="16">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="self_eval">自分の性格</label></dt>
                                <dd>
                                    <select name="self_eval" id="self_eval">
                                        <option value="1" selected="">やさしい</option>
                                        <option value="2">クール</option>
                                        <option value="3">おもしろい</option>
                                        <option value="4">おっとり</option>
                                        <option value="5">まじめ</option>
                                        <option value="6">サバサバ</option>
                                        <option value="7">個性的</option>
                                        <option value="8">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="ptn_self_eval">相手の好みの性格</label></dt>
                                <dd>
                                    <select name="ptn_self_eval" id="ptn_self_eval">
                                        <option value="1" selected="">やさしい</option>
                                        <option value="2">活発</option>
                                        <option value="3">まじめ</option>
                                        <option value="4">家庭的</option>
                                        <option value="5">女らしい</option>
                                        <option value="6">少しエッチ</option>
                                        <option value="7">気にしない</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="ptn_age">相手の希望年齢</label></dt>
                                <dd>
                                    <select name="ptn_age" id="ptn_age">
                                        <option value="1" selected="">18～30</option>
                                        <option value="2">25～40</option>
                                        <option value="3">30～50</option>
                                        <option value="4">40～</option>
                                        <option value="5">近い年代</option>
                                        <option value="6">年上</option>
                                        <option value="7">年下</option>
                                        <option value="8">気にしない</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="date_spot">デートするなら</label></dt>
                                <dd>
                                    <select name="date_spot" id="date_spot">
                                        <option value="1" selected="">遊園地</option>
                                        <option value="2">映画・コンサート</option>
                                        <option value="3">ドライブ</option>
                                        <option value="4">カラオケ</option>
                                        <option value="5">自然の中でほのぼの</option>
                                        <option value="6">食事</option>
                                        <option value="7">お酒を飲みにいく</option>
                                        <option value="8">自分(相手)の家</option>
                                        <option value="9">ホテルでまったり</option>
                                        <option value="10">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="objection">出会いの目的</label></dt>
                                <dd>
                                    <select name="objection" id="objection">
                                        <option value="1" selected="">メル友から</option>
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
                            <dl>
                                <dt><label for="marriage">婚姻暦</label></dt>
                                <dd>
                                    <select name="marriage" id="marriage">
                                        <option value="1" selected="">あり</option>
                                        <option value="2">なし</option>
                                        <option value="3">バツあり</option>
                                        <option value="4">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="drink">お酒は飲みますか</label></dt>
                                <dd>
                                    <select name="drink" id="drink">
                                        <option value="1" selected="">飲む</option>
                                        <option value="2">飲まない</option>
                                        <option value="3">たしなむ程度</option>
                                        <option value="4">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <dl>
                            <dt><label for="comments">自己紹介（200文字以内）</label></dt>
                            <dd><textarea type="text" name="comments" id="comments">性格はまじめです。初めまして。</textarea></dd>
                        </dl>
                        <div class="btn_l2 mb10"><a href="javascript:func_submit();">プロフィールを更新</a></div>
                        <p class="coution fc1">※プロフィールの更新は１日３回まで(0:00リセット)。</p>
                        <input type="hidden" name="mode" value="insert">
                    </form>
                </section>
                <section class="profile imgadmin">
                    <h2>画像管理</h2>
                    <form name="F1" method="post">
                        <dl>
                            <dt><label for="img">画像の追加</label></dt>
                            <dd class="formbox clearfix">
                                <input type="file" name="img" id="img">
                                <div class="btn_m"><input type="button" value="アップロード" onclick="disp(),go_submit('upload')"></div>
                            </dd>
                        </dl>
                        <p class="fc1">プロフィール画像は「選択」で画像選び「決定」ボタンを押してください。<br />
                            画像を削除する場合は削除にチェックをして「決定」ボタンを押してください。<br />
                        </p>
                        <ul class="imgadminbox clearfix">
                            <li>
                                <div><img src="img/dummy_img_read1.jpg" alt=""></div>
                                <div>画像1</div>
                                <div><span><input name="img1" type="radio" value="xxx" checked="">選択</span><span><input type="checkbox" name="delete[]" value="xxx">削除</span></div>
                            </li>
                            <li>
                                <div><img src="img/dummy_img_read2.jpg" alt=""></div>
                                <div><input name="img1" type="radio" value="1">選択</div>
                            </li>
                            <li>
                                <div><img src="img/dummy_img_read3.jpg" alt=""></div>
                                <div><input name="img1" type="radio" value="2">選択</div>
                            </li>
                            <li>
                                <div><img src="img/dummy_img_read4.jpg" alt=""></div>
                                <div><input name="img1" type="radio" value="3">選択</div>
                            </li>
                            <li>
                                <div><img src="img/dummy_img_read5.jpg" alt=""></div>
                                <div><input name="img1" type="radio" value="4">選択</div>
                            </li>
                            <li>
                                <div><img src="img/dummy_img_read6.jpg" alt=""></div>
                                <div><input name="img1" type="radio" value="5">選択</div>
                            </li>
                            <li>
                                <div><img src="img/dummy_img_read7.jpg" alt=""></div>
                                <div><input name="img1" type="radio" value="6">選択</div>
                            </li>
                        </ul>
                        <div class="btn_l2 mb10"><a href="javascript:func_submit();" onclick="update('insert_ok')">決定</a></div>
                        <p class="coution fc1">※プロフィール画像の更新は1日3回まで(0:00リセット)。</p>
                        <input type="hidden" name="mode" value="insert">
                    </form>
                </section>
                <section class="profile memberedit_mail">
                    <h2>メールアドレスの変更</h2>
                    <form name="F1" method="post">
                        <dl>
                            <dt><label for="login_id">現在のメールアドレス</label></dt>
                            <dd><input type="text" name="login_id" id="login_id" disabled="" value="xxxx@xxxx.co.jp"></dd>
                        </dl>
                        <dl>
                            <dt><label for="mail2_upd">新しいメールアドレス</label></dt>
                            <dd><input type="text" name="mail2_upd" id="mail2_upd" autocomplete="off" value=""></dd>
                        </dl>
                        <div class="btn_l2"><a href="javascript:set_user_info()" onclick="disp()">情報を変更</a></div>
                        <input type="hidden" name="mode" value="insert">
                    </form>
                </section>
                <section class="profile memberedit_pass">
                    <h2>登録パスワードの変更</h2>
                    <form name="F1" method="post">
                        <dl>
                            <dt><label for="login_pass">新しいパスワード</label></dt>
                            <dd><input type="text" name="login_pass" id="login_pass" value=""></dd>
                        </dl>
                        <dl>
                            <dt><label for="re_login_pass">新しいパスワード（再入力）</label></dt>
                            <dd><input type="text" name="re_login_pass" id="re_login_pass" value=""></dd>
                        </dl>
                        <div class="btn_l2"><a href="javascript:set_user_info()" onclick="disp()">情報を変更</a></div>
                        <input type="hidden" name="mode" value="insert">
                    </form>
                </section>
                <section class="profile memberedit_infomail">
                    <h2>メール受信設定</h2>
                    <form name="F1" method="post">
                        <dl>
                            <dt class="title"><label for="mail_all" class="text_kobetsu">全メール</label></dt>
                            <dd>
                                <select name="mail_all" class="m_settei" id="mail_all">
                                    <option value="0" selected="">全て受け取る</option>
                                    <option value="1">PCのみ受信</option>
                                    <option value="2">携帯のみ受信</option>
                                    <option value="3">スマートフォンのみ受信</option>
                                    <option value="4">全て拒否</option>
                                    <option value="5">詳細設定</option>
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt><label for="mail_receive">受信メール</label></dt>
                            <dd>
                                <select name="mail_receive" class="m_settei" id="mail_receive">
                                    <option value="0" selected="">全て受け取る</option>
                                    <option value="1">PCのみ受信</option>
                                    <option value="2">携帯のみ受信</option>
                                    <option value="3">スマートフォンのみ受信</option>
                                    <option value="4">全て拒否</option>
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt><label for="mail_site">サイトお知らせ</label></dt>
                            <dd>
                                <select name="mail_site" class="m_settei" id="mail_site">
                                    <option value="0" selected="">全て受け取る</option>
                                    <option value="1">PCのみ受信</option>
                                    <option value="2">携帯のみ受信</option>
                                    <option value="3">スマートフォンのみ受信</option>
                                    <option value="4">全て拒否</option>
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt><label for="mail_address">アドレス帳のみ</label></dt>
                            <dd>
                                <select name="mail_address" class="m_settei" id="mail_address">
                                    <option value="0" selected="">全て受け取る</option>
                                    <option value="1">PCのみ受信</option>
                                    <option value="2">携帯のみ受信</option>
                                    <option value="3">スマートフォンのみ受信</option>
                                    <option value="4">全て拒否</option>
                                </select>
                            </dd>
                        </dl>
                        <div class="btn_l2"><a href="javascript:set_mail_info()" onclick="disp()">受信設定を変更</a></div>
                        <input type="hidden" name="mode" value="insert">
                    </form>
                </section>
                <div class="nenreilink">
                    <p>平成21年2月1日から施行された出会いサイト規制法による年齢認証がお済みでない方は<a href="nenrei_login.html">こちら</a>よりご確認下さい。</p>
                </div>
            </div>
            <!-- /main -->
        </div>
    </div>
    <!-- /content -->

@endsection