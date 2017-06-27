@extends('layout')

@section('content')
    <div class="content">
        <div class="content-in clearfix">
            <!-- side -->
            <div class="sidebar">
                <section class="mine">
                    <h2 class="name">ラビ<span>さん</span></h2>
                    <ul class="prof">
                        <li class="photo_l"><img src="img/dummy_img_read1.jpg" alt=""></li>
                        <li class="loginid">ログインID：<strong></strong></li>
                        <li class="point">所持ポイント：<strong>---pt</strong></li>
                    </ul>
                    <ul class="btns">
                        <!--
                        <li class="btn_ms3"><a href="point_1_all.html">ポイントチャージ</a></li>
                        -->
                        <li class="btn_ms2"><a href="profile.html">プロフィール・写真設定</a></li>
                        <li class="btn_ms"><a href="mypage.html#toukou_box">掲示板に投稿する</a></li>
                    </ul>
                </section>
                <section class="favorite">
                    <h2>お気に入り</h2>
                    <form name="F1" method="post">
                        <ul>
                            <li class="clearfix">
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_s"><img src="img/dummy_img_read1.jpg" alt=""></li>
                                        <li class="name">にゃん丸</li>
                                    </a>
                                    <li class="che"><input type="checkbox" name="favorite_id[]" value=""></li>
                                </ul>
                            </li>
                            <li class="clearfix">
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_s"><img src="img/dummy_img_read2.jpg" alt=""></li>
                                        <li class="name">完全週休二日制</li>
                                    </a>
                                    <li class="che"><input type="checkbox" name="favorite_id[]" value=""></li>
                                </ul>
                            </li>
                            <li class="clearfix">
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_s"><img src="img/dummy_img_read3.jpg" alt=""></li>
                                        <li class="name">vvやまえみvv</li>
                                    </a>
                                    <li class="che"><input type="checkbox" name="favorite_id[]" value=""></li>
                                </ul>
                            </li>
                            <li class="clearfix">
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_s"><img src="img/dummy_img_read4.jpg" alt=""></li>
                                        <li class="name">祥子さん</li>
                                    </a>
                                    <li class="che"><input type="checkbox" name="favorite_id[]" value=""></li>
                                </ul>
                            </li>
                            <li class="clearfix">
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_s"><img src="img/dummy_img_read5.jpg" alt=""></li>
                                        <li class="name">ヒマヒマ☆レナ</li>
                                    </a>
                                    <li class="che"><input type="checkbox" name="favorite_id[]" value=""></li>
                                </ul>
                            </li>
                        </ul>
                        <input type="hidden" name="msg">
                        <input type="hidden" name="mode">
                        <input type="hidden" name="url" value="1">
                        <input type="hidden" name="page">
                    </form>
                    <div class="clearfix pager">
                        <p class="fl"><a href="javascript:gotopage()" target="_self"><span>&#171; </span>前の10件</a></p>
                        <p class="fr"><a href="javascript:gotopage()" target="_self">次の10件<span>  &#187;</span></a></p>
                    </div>
                    <div class="btn_ms">
                        <a href="javascript:void(0);" onclick="disp(),address_del(); return false;">チェックした項目を削除</a>
                    </div>


                </section>
                <section class="information">
                    <h2>お知らせ</h2>
                    <iframe src="http://meg-me.com/member_info.html" width="200" height="420" frameborder="0"
                            marginwidth="0" marginheight="0" align="middle" scrolling="yes"></iframe>
                </section>
            </div>
            <!-- /side -->
            <!-- main -->
            <div class="main">
                <!--
<section class="banner">
<a href=""><img src="img/img_banner01@2x.png" alt=""></a>
</section>
 -->
                <section class="searchbox">
                    <h2>掲示板投稿検索</h2>
                    <form name="F2" method="post" action="">
                        <div class="moreinfo clearfix">
                            <dl>
                                <dt><label for="age">相手の年齢</label></dt>
                                <dd>
                                    <select name="age" id="age">
                                        <option value="0" selected="">選択してください</option>
                                        <option value="1">18〜22</option>
                                        <option value="2">23〜27</option>
                                        <option value="3">28〜32</option>
                                        <option value="4">33〜37</option>
                                        <option value="5">38〜42</option>
                                        <option value="6">43以上</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="blood">血液型</label></dt>
                                <dd>
                                    <select name="blood" id="blood">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="0">A型</option>
                                        <option value="1">B型</option>
                                        <option value="2">O型</option>
                                        <option value="3">AB型</option>
                                        <option value="4">不明</option>
                                        <option value="5">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="height">身長</label></dt>
                                <dd>
                                    <select name="height" id="height">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="0">〜145</option>
                                        <option value="1">146〜150</option>
                                        <option value="2">151〜155</option>
                                        <option value="3">156〜160</option>
                                        <option value="4">161〜165</option>
                                        <option value="5">166〜175</option>
                                        <option value="6">176〜</option>
                                        <option value="7">分からない</option>
                                        <option value="8">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="style">体型</label></dt>
                                <dd>
                                    <select name="style" id="style">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="0">小柄</option>
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
                                <dt><label for="self_eval">性格</label></dt>
                                <dd>
                                    <select name="self_eval" id="self_eval">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="1">やさしい</option>
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
                                <dt><label for="ptn_age">相手が希望している年齢</label></dt>
                                <dd>
                                    <select name="ptn_age" id="ptn_age">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="1">18〜30</option>
                                        <option value="2">25〜40</option>
                                        <option value="3">30〜50</option>
                                        <option value="4">40〜</option>
                                        <option value="5">近い年代</option>
                                        <option value="6">年上</option>
                                        <option value="7">年下</option>
                                        <option value="8">気にしない</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="ptn_self_eval">相手が希望している性格</label></dt>
                                <dd>
                                    <select name="ptn_self_eval" id="ptn_self_eval">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="1">やさしい</option>
                                        <option value="2">活発</option>
                                        <option value="3">まじめ</option>
                                        <option value="4">仕事バリバリ</option>
                                        <option value="5">男らしい</option>
                                        <option value="6">少しエッチ</option>
                                        <option value="7">気にしない</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="job">職業</label></dt>
                                <dd>
                                    <select name="job" id="job">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="17">主婦</option>
                                        <option value="1">学生</option>
                                        <option value="2">ﾌﾘｰﾀｰ</option>
                                        <option value="3">OL･事務</option>
                                        <option value="4">販売･ﾃﾞｻﾞｲﾝ</option>
                                        <option value="5">会社経営</option>
                                        <option value="6">公務員</option>
                                        <option value="7">ｻｰﾋﾞｽ業</option>
                                        <option value="8">自営業</option>
                                        <option value="9">医療関係</option>
                                        <option value="10">美容関係</option>
                                        <option value="11">音楽関係</option>
                                        <option value="12">派遣関係</option>
                                        <option value="13">IT関係</option>
                                        <option value="14">専門職</option>
                                        <option value="15">その他</option>
                                        <option value="16">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="area">地域</label></dt>
                                <dd>
                                    <select name="area" onchange="chg_area1()" id="area">
                                        <option value="1">北海道</option>
                                        <option value="2">青森県</option>
                                        <option value="3">岩手県</option>
                                        <option value="4">宮城県</option>
                                        <option value="5">秋田県</option>
                                        <option value="6">山形県</option>
                                        <option value="7">福島県</option>
                                        <option value="8">新潟県</option>
                                        <option value="9">富山県</option>
                                        <option value="10">石川県</option>
                                        <option value="11">福井県</option>
                                        <option value="12">長野県</option>
                                        <option value="13">茨城県</option>
                                        <option value="14">栃木県</option>
                                        <option value="15">群馬県</option>
                                        <option value="16">埼玉県</option>
                                        <option value="17">千葉県</option>
                                        <option value="18">東京都</option>
                                        <option value="19" selected="">神奈川県</option>
                                        <option value="20">山梨県</option>
                                        <option value="21">岐阜県</option>
                                        <option value="22">静岡県</option>
                                        <option value="23">愛知県</option>
                                        <option value="24">三重県</option>
                                        <option value="25">滋賀県</option>
                                        <option value="26">京都府</option>
                                        <option value="27">大阪府</option>
                                        <option value="28">兵庫県</option>
                                        <option value="29">奈良県</option>
                                        <option value="30">和歌山県</option>
                                        <option value="31">鳥取県</option>
                                        <option value="32">島根県</option>
                                        <option value="33">岡山県</option>
                                        <option value="34">広島県</option>
                                        <option value="35">山口県</option>
                                        <option value="36">徳島県</option>
                                        <option value="37">香川県</option>
                                        <option value="38">愛媛県</option>
                                        <option value="39">高知県</option>
                                        <option value="40">福岡県</option>
                                        <option value="41">佐賀県</option>
                                        <option value="42">長崎県</option>
                                        <option value="43">熊本県</option>
                                        <option value="44">大分県</option>
                                        <option value="45">宮崎県</option>
                                        <option value="46">鹿児島県</option>
                                        <option value="47">沖縄県</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="area2">地域詳細</label></dt>
                                <dd>
                                    <select name="area2" id="area2">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="0">ひみつ</option>
                                        <option value="1">横浜市中区</option>
                                        <option value="2">横浜市旭区</option>
                                        <option value="3">横浜市磯子区</option>
                                        <option value="4">横浜市栄区</option>
                                        <option value="5">横浜市金沢区</option>
                                        <option value="6">横浜市戸塚区</option>
                                        <option value="7">横浜市港南区</option>
                                        <option value="8">横浜市港北区</option>
                                        <option value="9">横浜市神奈川区</option>
                                        <option value="10">横浜市瀬谷区</option>
                                        <option value="11">横浜市西区</option>
                                        <option value="12">横浜市青葉区</option>
                                        <option value="13">横浜市泉区</option>
                                        <option value="14">横浜市鶴見区</option>
                                        <option value="15">横浜市都筑区</option>
                                        <option value="16">横浜市南区</option>
                                        <option value="17">横浜市保土ケ谷区</option>
                                        <option value="18">横浜市緑区</option>
                                        <option value="19">川崎市中原区</option>
                                        <option value="20">川崎市宮前区</option>
                                        <option value="21">川崎市幸区</option>
                                        <option value="22">川崎市高津区</option>
                                        <option value="23">川崎市川崎区</option>
                                        <option value="24">川崎市多摩区</option>
                                        <option value="25">川崎市麻生区</option>
                                        <option value="26">綾瀬市</option>
                                        <option value="27">伊勢原市</option>
                                        <option value="28">横須賀市</option>
                                        <option value="29">海老名市</option>
                                        <option value="30">鎌倉市</option>
                                        <option value="31">茅ケ崎市</option>
                                        <option value="32">厚木市</option>
                                        <option value="33">座間市</option>
                                        <option value="34">三浦市</option>
                                        <option value="35">小田原市</option>
                                        <option value="36">秦野市</option>
                                        <option value="37">逗子市</option>
                                        <option value="38">相模原市</option>
                                        <option value="39">大和市</option>
                                        <option value="40">藤沢市</option>
                                        <option value="41">南足柄市</option>
                                        <option value="42">平塚市</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="objection">目的</label></dt>
                                <dd>
                                    <select name="objection" id="objection">
                                        <option value="99" selected="">選択してください</option>
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
                            <dl>
                                <dt><label for="date_spot">デートするなら</label></dt>
                                <dd>
                                    <select name="date_spot" id="date_spot">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="1">遊園地</option>
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
                                <dt><label for="marriage">婚姻暦</label></dt>
                                <dd>
                                    <select name="marriage" id="marriage">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="1">あり</option>
                                        <option value="2">なし</option>
                                        <option value="3">バツあり</option>
                                        <option value="4">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="drink">飲酒について</label></dt>
                                <dd>
                                    <select name="drink" id="drink">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="1">飲む</option>
                                        <option value="2">飲まない</option>
                                        <option value="3">たしなむ程度</option>
                                        <option value="4">ひみつ</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt><label for="photo">画像の有無</label></dt>
                                <dd>
                                    <select name="photo" id="photo">
                                        <option value="99" selected="">選択してください</option>
                                        <option value="1">あり</option>
                                        <option value="2">なし</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <div class="btn_l2"><input type="submit" value="この条件で検索する"></div>
                        <input type="hidden" name="mode">
                    </form>
                </section>
                <section class="searchmember">
                    <h2>会員検索</h2>
                    <ul>
                        <li class="clearfix">
                            <ul>
                                <a href="keijiban_syousai.html">
                                    <div class="clearfix">
                                        <div class="leftbox">
                                            <li class="photo_m"><img src="img/dummy_img_read4.jpg" alt=""></li>
                                        </div>
                                        <div class="rightbox">
                                            <div class="mb10">
                                                <li class="name">ゆに☆</li>
                                                <li class="age">20歳</li>
                                                <li class="date">02/23 17:50</li>
                                            </div>
                                            <div>
                                                <li class="area">
                                                    <dl>
                                                        <dt></dt>
                                                        <dd>ひみつ</dd>
                                                    </dl>
                                                </li>
                                                <li class="blad">
                                                    <dl>
                                                        <dt>血液型：</dt>
                                                        <dd>A型</dd>
                                                    </dl>
                                                </li>
                                                <li class="objection">
                                                    <dl>
                                                        <dt>目的：</dt>
                                                        <dd>メル友から</dd>
                                                    </dl>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">星川駅が最寄でーす☆迎えにきてくれませんか？♪</li>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="keijiban_syousai.html">
                                    <div class="clearfix">
                                        <div class="leftbox">
                                            <li class="photo_m"><img src="img/dummy_img_read5.jpg" alt=""></li>
                                        </div>
                                        <div class="rightbox">
                                            <div class="mb10">
                                                <li class="name">*さら。☆</li>
                                                <li class="age">24歳</li>
                                                <li class="date">02/23 17:37</li>
                                            </div>
                                            <div>
                                                <li class="area">
                                                    <dl>
                                                        <dt></dt>
                                                        <dd>横浜市泉区</dd>
                                                    </dl>
                                                </li>
                                                <li class="blad">
                                                    <dl>
                                                        <dt>血液型：</dt>
                                                        <dd>ひみつ</dd>
                                                    </dl>
                                                </li>
                                                <li class="objection">
                                                    <dl>
                                                        <dt>目的：</dt>
                                                        <dd>すぐ会いたい</dd>
                                                    </dl>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">我そこはって人はどんどん立候補してください★</li>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="keijiban_syousai.html">
                                    <div class="clearfix">
                                        <div class="leftbox">
                                            <li class="photo_m"><img src="img/dummy_img_read6.jpg" alt=""></li>
                                        </div>
                                        <div class="rightbox">
                                            <div class="mb10">
                                                <li class="name">寂しんぼ。</li>
                                                <li class="age">23歳</li>
                                                <li class="date">02/23 12:16</li>
                                            </div>
                                            <div>
                                                <li class="area">
                                                    <dl>
                                                        <dt></dt>
                                                        <dd>横浜市泉区</dd>
                                                    </dl>
                                                </li>
                                                <li class="blad">
                                                    <dl>
                                                        <dt>血液型：</dt>
                                                        <dd>B型</dd>
                                                    </dl>
                                                </li>
                                                <li class="objection">
                                                    <dl>
                                                        <dt>目的：</dt>
                                                        <dd>癒し</dd>
                                                    </dl>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">ただいまダイエット中！！！</li>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="keijiban_syousai.html">
                                    <div class="clearfix">
                                        <div class="leftbox">
                                            <li class="photo_m"><img src="img/dummy_img_read7.jpg" alt=""></li>
                                        </div>
                                        <div class="rightbox">
                                            <div class="mb10">
                                                <li class="name">もも</li>
                                                <li class="age">26歳</li>
                                                <li class="date">02/23 12:16</li>
                                            </div>
                                            <div>
                                                <li class="area">
                                                    <dl>
                                                        <dt></dt>
                                                        <dd>横浜市泉区</dd>
                                                    </dl>
                                                </li>
                                                <li class="blad">
                                                    <dl>
                                                        <dt>血液型：</dt>
                                                        <dd>AB型</dd>
                                                    </dl>
                                                </li>
                                                <li class="objection">
                                                    <dl>
                                                        <dt>目的：</dt>
                                                        <dd>ひみつの関係</dd>
                                                    </dl>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">休みの日はお昼くらい会いたいな☆最初はお茶かご飯がいいな♪</li>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="keijiban_syousai.html">
                                    <div class="clearfix">
                                        <div class="leftbox">
                                            <li class="photo_m"><img src="img/dummy_img_read8.jpg" alt=""></li>
                                        </div>
                                        <div class="rightbox">
                                            <div class="mb10">
                                                <li class="name">アヤ</li>
                                                <li class="age">40歳</li>
                                                <li class="date">02/23 09:12</li>
                                            </div>
                                            <div>
                                                <li class="area">
                                                    <dl>
                                                        <dt></dt>
                                                        <dd>ひみつ</dd>
                                                    </dl>
                                                </li>
                                                <li class="blad">
                                                    <dl>
                                                        <dt>血液型：</dt>
                                                        <dd>ひみつ</dd>
                                                    </dl>
                                                </li>
                                                <li class="objection">
                                                    <dl>
                                                        <dt>目的：</dt>
                                                        <dd>ひみつ</dd>
                                                    </dl>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">(=^･ω･^)ﾉにゃっ��</li>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="keijiban_syousai.html">
                                    <div class="clearfix">
                                        <div class="leftbox">
                                            <li class="photo_m"><img src="img/dummy_img_read4.jpg" alt=""></li>
                                        </div>
                                        <div class="rightbox">
                                            <div class="mb10">
                                                <li class="name">ゆに☆</li>
                                                <li class="age">20歳</li>
                                                <li class="date">02/23 17:50</li>
                                            </div>
                                            <div>
                                                <li class="area">
                                                    <dl>
                                                        <dt></dt>
                                                        <dd>ひみつ</dd>
                                                    </dl>
                                                </li>
                                                <li class="blad">
                                                    <dl>
                                                        <dt>血液型：</dt>
                                                        <dd>A型</dd>
                                                    </dl>
                                                </li>
                                                <li class="objection">
                                                    <dl>
                                                        <dt>目的：</dt>
                                                        <dd>メル友から</dd>
                                                    </dl>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">星川駅が最寄でーす☆迎えにきてくれませんか？♪</li>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="keijiban_syousai.html">
                                    <div class="clearfix">
                                        <div class="leftbox">
                                            <li class="photo_m"><img src="img/dummy_img_read5.jpg" alt=""></li>
                                        </div>
                                        <div class="rightbox">
                                            <div class="mb10">
                                                <li class="name">*さら。☆</li>
                                                <li class="age">24歳</li>
                                                <li class="date">02/23 17:37</li>
                                            </div>
                                            <div>
                                                <li class="area">
                                                    <dl>
                                                        <dt></dt>
                                                        <dd>横浜市泉区</dd>
                                                    </dl>
                                                </li>
                                                <li class="blad">
                                                    <dl>
                                                        <dt>血液型：</dt>
                                                        <dd>ひみつ</dd>
                                                    </dl>
                                                </li>
                                                <li class="objection">
                                                    <dl>
                                                        <dt>目的：</dt>
                                                        <dd>すぐ会いたい</dd>
                                                    </dl>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">我そこはって人はどんどん立候補してください★</li>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="keijiban_syousai.html">
                                    <div class="clearfix">
                                        <div class="leftbox">
                                            <li class="photo_m"><img src="img/dummy_img_read6.jpg" alt=""></li>
                                        </div>
                                        <div class="rightbox">
                                            <div class="mb10">
                                                <li class="name">寂しんぼ。</li>
                                                <li class="age">23歳</li>
                                                <li class="date">02/23 12:16</li>
                                            </div>
                                            <div>
                                                <li class="area">
                                                    <dl>
                                                        <dt></dt>
                                                        <dd>横浜市泉区</dd>
                                                    </dl>
                                                </li>
                                                <li class="blad">
                                                    <dl>
                                                        <dt>血液型：</dt>
                                                        <dd>B型</dd>
                                                    </dl>
                                                </li>
                                                <li class="objection">
                                                    <dl>
                                                        <dt>目的：</dt>
                                                        <dd>癒し</dd>
                                                    </dl>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">ただいまダイエット中！！！</li>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="keijiban_syousai.html">
                                    <div class="clearfix">
                                        <div class="leftbox">
                                            <li class="photo_m"><img src="img/dummy_img_read7.jpg" alt=""></li>
                                        </div>
                                        <div class="rightbox">
                                            <div class="mb10">
                                                <li class="name">もも</li>
                                                <li class="age">26歳</li>
                                                <li class="date">02/23 12:16</li>
                                            </div>
                                            <div>
                                                <li class="area">
                                                    <dl>
                                                        <dt></dt>
                                                        <dd>横浜市泉区</dd>
                                                    </dl>
                                                </li>
                                                <li class="blad">
                                                    <dl>
                                                        <dt>血液型：</dt>
                                                        <dd>AB型</dd>
                                                    </dl>
                                                </li>
                                                <li class="objection">
                                                    <dl>
                                                        <dt>目的：</dt>
                                                        <dd>ひみつの関係</dd>
                                                    </dl>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">休みの日はお昼くらい会いたいな☆最初はお茶かご飯がいいな♪</li>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="keijiban_syousai.html">
                                    <div class="clearfix">
                                        <div class="leftbox">
                                            <li class="photo_m"><img src="img/dummy_img_read8.jpg" alt=""></li>
                                        </div>
                                        <div class="rightbox">
                                            <div class="mb10">
                                                <li class="name">アヤ</li>
                                                <li class="age">40歳</li>
                                                <li class="date">02/23 09:12</li>
                                            </div>
                                            <div>
                                                <li class="area">
                                                    <dl>
                                                        <dt></dt>
                                                        <dd>ひみつ</dd>
                                                    </dl>
                                                </li>
                                                <li class="blad">
                                                    <dl>
                                                        <dt>血液型：</dt>
                                                        <dd>ひみつ</dd>
                                                    </dl>
                                                </li>
                                                <li class="objection">
                                                    <dl>
                                                        <dt>目的：</dt>
                                                        <dd>ひみつ</dd>
                                                    </dl>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">(=^･ω･^)ﾉにゃっ��</li>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </li>

                    </ul>
                    <div class="clearfix pager">
                        <p class="fl"><a href="javascript:gotopage()" target="_self"><span>&#171; </span>前の10件</a></p>
                        <p class="fr"><a href="javascript:gotopage()" target="_self">次の10件<span>  &#187;</span></a></p>
                    </div>
                </section>
            </div>
            <!-- /main -->
        </div>
    </div>
@endsection