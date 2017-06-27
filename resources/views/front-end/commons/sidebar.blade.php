<div class="sidebar">
    <base href="{{asset('')}}" />
    <section class="mine">
        <h2 class="name">ラビ<span>さん</span></h2>
        <ul class="prof">
            <li class="photo_l"><img src="img/no_image.png" alt=""></li>
            <li class="loginid">ログインID：<strong>{{Auth::user()->nick_name}}</strong></li>
            <li class="point">所持ポイント：<strong>---pt</strong></li>
        </ul>
        <ul class="btns">
            <li class="btn_ms3"><a href="point_1_all.html">ポイントチャージ</a></li>
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
                            <li class="name">にゃん丸</li></a>
                        <li class="che"><input type="checkbox" name="favorite_id[]" value=""></li>
                    </ul>
                </li>
                <li class="clearfix">
                    <ul>
                        <a href="keijiban_syousai.html">
                            <li class="photo_s"><img src="img/dummy_img_read2.jpg" alt=""></li>
                            <li class="name">完全週休二日制</li></a>
                        <li class="che"><input type="checkbox" name="favorite_id[]" value=""></li>
                    </ul>
                </li>
                <li class="clearfix">
                    <ul>
                        <a href="keijiban_syousai.html">
                            <li class="photo_s"><img src="img/dummy_img_read3.jpg" alt=""></li>
                            <li class="name">vvやまえみvv</li></a>
                        <li class="che"><input type="checkbox" name="favorite_id[]" value=""></li>
                    </ul>
                </li>
                <li class="clearfix">
                    <ul>
                        <a href="keijiban_syousai.html">
                            <li class="photo_s"><img src="img/dummy_img_read4.jpg" alt=""></li>
                            <li class="name">祥子さん</li></a>
                        <li class="che"><input type="checkbox" name="favorite_id[]" value=""></li>
                    </ul>
                </li>
                <li class="clearfix">
                    <ul>
                        <a href="keijiban_syousai.html">
                            <li class="photo_s"><img src="img/dummy_img_read5.jpg" alt=""></li>
                            <li class="name">ヒマヒマ☆レナ</li></a>
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
        <iframe src="http://meg-me.com/member_info.html" width="200" height="420" frameborder="0" marginwidth="0" marginheight="0" align="middle" scrolling="yes"></iframe>
    </section>
</div>