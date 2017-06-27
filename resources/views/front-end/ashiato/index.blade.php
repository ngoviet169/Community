@extends('layout')
@section('title', 'あしあと')
    @section('content')
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
                    <section class="ashiatomember">
                        <h2>あしあと</h2>
                        <ul>
                            <li>
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_m"><img src="img/dummy_img_read4.jpg" alt=""></li>
                                        <li class="name">ゆに☆</li>
                                        <li class="age">20歳</li>
                                        <li class="area">ひみつ</li>
                                        <li class="date">02/23 17:50</li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_m"><img src="img/dummy_img_read5.jpg" alt=""></li>
                                        <li class="name">さら。☆</li>
                                        <li class="age">24歳</li>
                                        <li class="area">横浜市泉区</li>
                                        <li class="date">02/23 17:37</li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_m"><img src="img/dummy_img_read6.jpg" alt=""></li>
                                        <li class="name">寂しんぼ。</li>
                                        <li class="age">23歳</li>
                                        <li class="area">横浜市泉区</li>
                                        <li class="date">02/23 12:16</li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_m"><img src="img/dummy_img_read7.jpg" alt=""></li>
                                        <li class="name">もも</li>
                                        <li class="age">26歳</li>
                                        <li class="area">横浜市泉区</li>
                                        <li class="date">02/23 09:13</li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_m"><img src="img/dummy_img_read4.jpg" alt=""></li>
                                        <li class="name">ゆに☆</li>
                                        <li class="age">20歳</li>
                                        <li class="area">ひみつ</li>
                                        <li class="date">02/23 17:50</li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_m"><img src="img/dummy_img_read5.jpg" alt=""></li>
                                        <li class="name">さら。☆</li>
                                        <li class="age">24歳</li>
                                        <li class="area">横浜市泉区</li>
                                        <li class="date">02/23 17:37</li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_m"><img src="img/dummy_img_read6.jpg" alt=""></li>
                                        <li class="name">寂しんぼ。</li>
                                        <li class="age">23歳</li>
                                        <li class="area">横浜市泉区</li>
                                        <li class="date">02/23 12:16</li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_m"><img src="img/dummy_img_read7.jpg" alt=""></li>
                                        <li class="name">もも</li>
                                        <li class="age">26歳</li>
                                        <li class="area">横浜市泉区</li>
                                        <li class="date">02/23 09:13</li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_m"><img src="img/dummy_img_read4.jpg" alt=""></li>
                                        <li class="name">ゆに☆</li>
                                        <li class="age">20歳</li>
                                        <li class="area">ひみつ</li>
                                        <li class="date">02/23 17:50</li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="keijiban_syousai.html">
                                        <li class="photo_m"><img src="img/dummy_img_read7.jpg" alt=""></li>
                                        <li class="name">もも</li>
                                        <li class="age">26歳</li>
                                        <li class="area">横浜市泉区</li>
                                        <li class="date">02/23 09:13</li>
                                    </a>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix pager">
                            <p class="fl"><a href="javascript:gotopage()" target="_self"><span>&#171; </span>前の10件</a></p>
                            <p class="fr"><a href="javascript:gotopage()" target="_self">次の10件<span>  &#187;</span></a></p>
                        </div>
                    </section>
                    <section class="manual">
                        <h3>あしあとについて</h3>
                        <p>あなたの掲示板やプロフィールを見たお相手の履歴が表示されます。<br />
                            あなたに興味を持っている、惹かれているお相手が一目で分かります！<br />
                            さらに「プロフを見る」ボタンをクリックしてお相手にメール送信することも可能です。<br />
                            あなたの掲示板もプロフィールも読んでくれている人たちばかりなので気軽にメールしてあげてくださいね。<br />
                            逆に気になるお相手にあしあとをつけてみるのもオススメです！</p>
                        <h3>あしあとがつく条件</h3>
                        <p>下記3つの行動で気になるお相手にあしあとをつける事ができます！</p>
                        <h4 class="fc1">相手の<span>掲示板</span>を見る　　相手の<span>プロフ</span>を見る　　相手に<span>メール</span>を送る</h4>
                    </section>
                </div>
                <!-- /main -->
            </div>
        </div>
        @endsection