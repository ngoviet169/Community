@extends('layout')
@section('title', 'マイページ')
    @section('content')
    <script language="JavaScript" type="text/JavaScript">
        <!--
        function CountDownTextLength(fn, rn, mc, type) {
            var len = document.getElementById(fn).value.length;
            if (len > mc) {
                fn.value = fn.value.substring(0, mc);
                len = mc;
            }
            document.getElementById(rn).innerHTML = mc - len;
        }
        -->
    </script>
    <!-- content -->
    <div class="content">
        <div class="content-in clearfix">
            <!-- side -->
            @include('front-end.commons.sidebar')
            <!-- /side -->
            <!-- main -->
            <div class="main">
                <section class="banner">
                    <a href=""><img src="img/img_banner01@2x.png.png" alt=""></a>
                </section>
                <section class="pickupmember">
                    <h2>あなたにオススメの会員</h2>
                    <!-- slick -->
                    <script src="js/slick.min.js"></script>
                    <script type="text/javascript">
                        $(document).on('ready', function () {
                            $(".regular").slick({
                                dots: true,
                                infinite: true,
                                slidesToShow: 3,
                                slidesToScroll: 3
                            });
                        });
                    </script>
                    <!-- /slick -->
                    <ul class="regular slider">
                        <li>
                            <a href="keijiban_syousai.html">
                                <div class="photo_m"><img src="img/dummy_img_read4.jpg" alt=""></div>
                                <div class="name">ゆに☆<span class="age">(20)</span></div>
                                <div class="area">ひみつ</div>
                                <div class="text">いつも暇しています。お酒が好きです飲みに...</div>
                            </a>
                        </li>
                        <li>
                            <a href="keijiban_syousai.html">
                                <div class="photo_m"><img src="img/dummy_img_read5.jpg" alt=""></div>
                                <div class="name">さら。☆<span class="age">(24)</span></div>
                                <div class="area">横浜市泉区</div>
                                <div class="text">テキストは20文字以降は...になる</div>
                            </a>
                        </li>
                        <li>
                            <a href="keijiban_syousai.html">
                                <div class="photo_m"><img src="img/dummy_img_read6.jpg" alt=""></div>
                                <div class="name">寂しんぼ。<span class="age">(23)</span></div>
                                <div class="area">横浜市泉区</div>
                                <div class="text">こんにちは(^^)</div>
                            </a>
                        </li>
                        <li>
                            <a href="keijiban_syousai.html">
                                <div class="photo_m"><img src="img/dummy_img_read7.jpg" alt=""></div>
                                <div class="name">もも<span class="age">(26)</span></div>
                                <div class="area">横浜市泉区</div>
                                <div class="text">テキストは20文字以降は...になる</div>
                            </a>
                        </li>
                        <li>
                            <a href="keijiban_syousai.html">
                                <div class="photo_m"><img src="img/dummy_img_read4.jpg" alt=""></div>
                                <div class="name">ゆに☆<span class="age">(20)</span></div>
                                <div class="area">ひみつ</div>
                                <div class="text">いつも暇しています。お酒が好きです飲みに...</div>
                            </a>
                        </li>
                        <li>
                            <a href="keijiban_syousai.html">
                                <div class="photo_m"><img src="img/dummy_img_read5.jpg" alt=""></div>
                                <div class="name">さら。☆<span class="age">(24)</span></div>
                                <div class="area">横浜市泉区</div>
                                <div class="text">テキストは20文字以降は...になる</div>
                            </a>
                        </li>
                    </ul>
                    <ul class="slick-dots" style="display: block;" role="tablist">
                        <li class="" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00">
                            <button type="button" data-role="none" role="button" tabindex="0">1</button>
                        </li>
                        <li aria-hidden="false" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class="slick-active">
                            <button type="button" data-role="none" role="button" tabindex="0">2</button>
                        </li>
                    </ul>
                </section>
                <section class="mailbox topmail">
                    <h2>新着受信メール</h2>
                    <ul>
                        <li class="clearfix">
                            <ul>
                                <a href="mail_syousai.html">
                                    <li class="name"><span class="ico_muryou">無料開封</span>事務局</li>
                                    <li class="date">02/23 17:15</li>
                                    <li class="hitokoto">大盤振舞!!ポイントチャー・・・</li>
                                    <li class="btn_s2">読む</li>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="mail_syousai.html">
                                    <li class="name"><span class="ico_photo">Photo</span>にゃんにゃん丸</li>
                                    <li class="date">02/15 21:00</li>
                                    <li class="hitokoto">あいたいです・・・</li>
                                    <li class="btn_s2">読む</li>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="mail_syousai.html">
                                    <li class="name"><span class="ico_muryou">無料開封</span>事務局</li>
                                    <li class="date">02/23 17:15</li>
                                    <li class="hitokoto">[MEET]メールの送受信・・・</li>
                                    <li class="btn_s2">読む</li>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="mail_syousai.html">
                                    <li class="name"><span class="ico_muryou">無料開封</span>事務局</li>
                                    <li class="date">02/23 17:15</li>
                                    <li class="hitokoto">【激安1000円決済可能♪】・・・</li>
                                    <li class="btn_s2">読む</li>
                                </a>
                            </ul>
                        </li>
                        <li class="clearfix">
                            <ul>
                                <a href="mail_syousai.html">
                                    <li class="name"><span></span>陽菜</li>
                                    <li class="date">02/15 21:00</li>
                                    <li class="hitokoto">中田東で一人暮らししてる・・・</li>
                                    <li class="btn_s2">読む</li>
                                </a>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix pager">
                        <p class="fr"><a href="jyusin.html">新着受信メール一覧ページへ<span>  &#187;</span></a></p>
                    </div>
                </section>
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
                    </ul>
                    <div class="clearfix pager">
                        <p class="fr"><a href="ashiato.html">あしあと一覧ページへ<span>  &#187;</span></a></p>
                    </div>
                </section>
                <section id="toukou_box" class="bbssubmit">
                    <h2>掲示板投稿</h2>
                    <form name="F1" method="post">
                        <dl>
                            <dt>タイトル（30文字以内）
                            <div>残り文字数：<span id="count-down-title">30</span></div>
                            </dt>
                            <dd><input type="text" name="title" id="title" maxlength="30"
                                       onkeyup="CountDownTextLength('title', 'count-down-title', 30)"></dd>
                        </dl>
                        <dl>
                            <dt>メッセージ（200字以内）
                            <div>残り文字数：<span id="count-down-body">200</span></div>
                            </dt>
                            <dd><textarea name="body" id="body" rows="8" cols="40" maxlength="200"
                                          onkeyup="CountDownTextLength('body', 'count-down-body', 200)"></textarea></dd>
                        </dl>
                        <div class="btn_l2"><a href="javascript:bbs_post();" onClick="disp()">掲示板に投稿</a></div>
                        <input type="hidden" name="" value="">
                    </form>
                </section>
            </div>
            <!-- /main -->
        </div>
    </div>
    <!-- /content -->
@endsection

