@extends('layout')
@section('title', '会員検索')
    @section('content')
        <div class="content">
            <div class="content-in clearfix">
                <!-- side -->
                @include('front-end.commons.sidebar')
                <!-- /side -->
                <!-- main -->
                <div class="main">
                    <section class="searchbox">
                        <h2>掲示板投稿検索</h2>
                        <form name="F2" method="post" action="">
                            <div class="moreinfo clearfix">
                                <dl>
                                    <dt><label for="age">相手の年齢</label></dt>
                                    <dd>
                                        <select name="age"><option value="0" selected="">選択してください</option>
                                            <option value="1">18～22</option>
                                            <option value="2">23～27</option>
                                            <option value="3">28～32</option>
                                            <option value="4">33～37</option>
                                            <option value="5">38～42</option>
                                            <option value="6">43以上</option>
                                        </select>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><label for="blood">血液型</label></dt>
                                    <dd>
                                        <select name="blood"><option value="99" selected="">選択してください</option>
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
                                        <select name="height"><option value="99" selected="">選択してください</option>
                                            <option value="0">～145</option>
                                            <option value="1">146～150</option>
                                            <option value="2">151～155</option>
                                            <option value="3">156～160</option>
                                            <option value="4">161～165</option>
                                            <option value="5">166～175</option>
                                            <option value="6">176～</option>
                                            <option value="7">分からない</option>
                                            <option value="8">ひみつ</option>
                                        </select>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><label for="style">体型</label></dt>
                                    <dd>
                                        <select name="style"><option value="99" selected="">選択してください</option>
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
                                        <select name="self_eval"><option value="99" selected="">選択してください</option>
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
                                        <select name="ptn_age"><option value="99" selected="">選択してください</option>
                                            <option value="1">18～30</option>
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
                                    <dt><label for="ptn_self_eval">相手が希望している性格</label></dt>
                                    <dd>
                                        <select name="ptn_self_eval"><option value="99" selected="">選択してください</option>
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
                                        <select name="job"><option value="99" selected="">選択してください</option>
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
                                        <select name="area" onchange="chg_area1()"><option value="1" selected="">北海道</option>
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
                                            <option value="19">神奈川県</option>
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
                                        <select name="area2">
                                            <option value="99" selected="">選択してください</option>
                                            <option value="0">ひみつ</option>
                                            <option value="1">札幌市中央区</option>
                                            <option value="2">札幌市厚別区</option>
                                            <option value="3">札幌市手稲区</option>
                                            <option value="4">札幌市清田区</option>
                                            <option value="5">札幌市西区</option>
                                            <option value="6">札幌市東区</option>
                                            <option value="7">札幌市南区</option>
                                            <option value="8">札幌市白石区</option>
                                            <option value="9">札幌市豊平区</option>
                                            <option value="10">札幌市北区</option>
                                            <option value="11">旭川市</option>
                                            <option value="12">芦別市</option>
                                            <option value="13">伊達市</option>
                                            <option value="14">歌志内市</option>
                                            <option value="15">岩見沢市</option>
                                            <option value="16">釧路市</option>
                                            <option value="17">恵庭市</option>
                                            <option value="18">江別市</option>
                                            <option value="19">根室市</option>
                                            <option value="20">砂川市</option>
                                            <option value="21">三笠市</option>
                                            <option value="22">士別市</option>
                                            <option value="23">室蘭市</option>
                                            <option value="24">小樽市</option>
                                            <option value="25">深川市</option>
                                            <option value="26">石狩市</option>
                                            <option value="27">赤平市</option>
                                            <option value="28">千歳市</option>
                                            <option value="29">帯広市</option>
                                            <option value="30">滝川市</option>
                                            <option value="31">稚内市</option>
                                            <option value="32">登別市</option>
                                            <option value="33">苫小牧市</option>
                                            <option value="34">函館市</option>
                                            <option value="35">美唄市</option>
                                            <option value="36">富良野市</option>
                                            <option value="37">北見市</option>
                                            <option value="38">北広島市</option>
                                            <option value="39">北斗市</option>
                                            <option value="40">名寄市</option>
                                            <option value="41">網走市</option>
                                            <option value="42">紋別市</option>
                                            <option value="43">夕張市</option>
                                            <option value="44">留萌市</option>
                                            <option value="45">北海道離島</option>
                                        </select>

                                    </dd>
                                </dl>
                                <dl>
                                    <dt><label for="objection">目的</label></dt>
                                    <dd>
                                        <select name="objection"><option value="99" selected="">選択してください</option>
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
                                        <select name="date_spot"><option value="99" selected="">選択してください</option>
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
                                        <select name="marriage"><option value="99" selected="">選択してください</option>
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
                                        <select name="drink"><option value="99" selected="">選択してください</option>
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
                                        <select name="photo"><option value="99" selected="">選択してください</option>
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
                    <form method="post" name="F1" action="" style="margin:0;">
                        <section class="searchmember">
                            <h2>会員検索</h2>
                            <ul>
                            </ul>
                            <div class="clearfix pager">
                                <p class="fl"></p>
                                <p class="fr"></p>
                            </div>
                        </section>
                        <input type="hidden" name="mode">
                        <input type="hidden" name="page">
                        <input type="hidden" name="list_no">
                        <input type="hidden" name="msg">
                        <input type="hidden" name="url" value="4">
                        <input type="hidden" name="area" value="1">

                    </form>
                </div>
                <!-- /main -->
            </div>
        </div>
        @endsection