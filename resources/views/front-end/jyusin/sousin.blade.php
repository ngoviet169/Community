@extends('layout')
@section('title', '新着受信メール')
@section('content')
    <!-- content -->
    <script language="JavaScript" type="text/JavaScript">
        <!--
        function keijiban_syousai(id){
            document.F1.action = "keijiban_syousai.html";
            document.F1.mid.value = id;
            document.F1.submit();
            document.F1.action = "";
        }

        function mail_delete(){
            document.F1.mode.value = "delete";
            document.F1.submit();
        }

        function selectAll(mode){
            oElements = document.getElementsByName("mail_id[]");
            for(i=0;i<oElements.length;i++){
                oElements[i].checked = mode;
            }
        }
        //-->
    </script>
    <div class="content">
        <div class="content-in clearfix">
            <!-- side -->
            @include('front-end.commons.sidebar')
            <!-- /side -->
            <!-- main -->
            <div class="main">
                <section class="banner">
                    <div align="center" id="mmidasi"><a href="/kensaku_r.html"><img src="img/720_200.jpg" border="0" style="width=720,height=200"></a></div>
                </section>
                <section class="mailboxlink">
                    <ul class="clearfix">
                        <li><a href="jyusin.html">新　着</a></li>
                        <li><a href="jyusin2.html">既　読</a></li>
                        <li><a href="jyusin3.html">お知らせ</a></li>
                        <li class="stay"><a href="sousin.html">送　信</a></li>
                    </ul>
                </section>
                <section class="mailbox">
                    <div class="clearfix">
                        <h2 class="fl">送信メールBOX</h2>
                        <p class="pointinfo">※ポイントはかかりませんので是非ご覧ください。</p>
                    </div>
                    <form method="post" name="F1" action="" style="margin:0;">
                        <ul>
                            <li class="clearfix addressmark">
                                <ul>
                                    <div class="leftbox">
                                        <li class="che"><input type="checkbox" name="mail_id[]" value="17307"></li>
                                        <li class="photo_s"><img src="img_read.html?hash=5ee4bb049560867&div_info=pc_site"></li>
                                        <li></li>
                                    </div>
                                    <a href="javascript:keijiban_syousai(17307)">
                                        <div class="rightbox">
                                            <div>
                                                <li class="name">ゆみてす</li>
                                                <li class="age">18歳</li>
                                                <li class="area">赤平市</li>
                                                <li class="date">2017/06/19 09:34</li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">Ok</li>
                                                <li class="btn_s2">読む</li>
                                            </div></div>
                                    </a>
                                </ul>
                            </li>
                            <li class="clearfix addressmark">
                                <ul>
                                    <div class="leftbox">
                                        <li class="che"><input type="checkbox" name="mail_id[]" value="17306"></li>
                                        <li class="photo_s"><img src="img_read.html?hash=5ee4bb049560867&div_info=pc_site"></li>
                                        <li></li>
                                    </div>
                                    <a href="javascript:keijiban_syousai(17306)">
                                        <div class="rightbox">
                                            <div>
                                                <li class="name">ゆみてす</li>
                                                <li class="age">18歳</li>
                                                <li class="area">赤平市</li>
                                                <li class="date">2017/06/19 09:18</li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">manpage</li>
                                                <li class="btn_s2">読む</li>
                                            </div></div>
                                    </a>
                                </ul>
                            </li>
                            <li class="clearfix addressmark">
                                <ul>
                                    <div class="leftbox">
                                        <li class="che"><input type="checkbox" name="mail_id[]" value="17305"></li>
                                        <li class="photo_s"><img src="img_read.html?hash=5ee4bb049560867&div_info=pc_site"></li>
                                        <li></li>
                                    </div>
                                    <a href="javascript:keijiban_syousai(17305)">
                                        <div class="rightbox">
                                            <div>
                                                <li class="name">ゆみてす</li>
                                                <li class="age">18歳</li>
                                                <li class="area">赤平市</li>
                                                <li class="date">2017/06/15 18:04</li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">30文字以内30文字以内30文字以内30文字以内30文字以内30文字以内30文字以内30文字以内30</li>
                                                <li class="btn_s2">読む</li>
                                            </div></div>
                                    </a>
                                </ul>
                            </li>
                            <li class="clearfix addressmark">
                                <ul>
                                    <div class="leftbox">
                                        <li class="che"><input type="checkbox" name="mail_id[]" value="17303"></li>
                                        <li class="photo_s"><img src="img_read.html?hash=5ee4bb049560867&div_info=pc_site"></li>
                                        <li></li>
                                    </div>
                                    <a href="javascript:keijiban_syousai(17303)">
                                        <div class="rightbox">
                                            <div>
                                                <li class="name">ゆみてす</li>
                                                <li class="age">18歳</li>
                                                <li class="area">赤平市</li>
                                                <li class="date">2017/06/06 17:41</li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">okie ne</li>
                                                <li class="btn_s2">読む</li>
                                            </div></div>
                                    </a>
                                </ul>
                            </li>
                            <li class="clearfix addressmark">
                                <ul>
                                    <div class="leftbox">
                                        <li class="che"><input type="checkbox" name="mail_id[]" value="17300"></li>
                                        <li class="photo_s"><img src="img_read.html?hash=5ee4bb049560867&div_info=pc_site"></li>
                                        <li></li>
                                    </div>
                                    <a href="javascript:keijiban_syousai(17300)">
                                        <div class="rightbox">
                                            <div>
                                                <li class="name">ゆみてす</li>
                                                <li class="age">18歳</li>
                                                <li class="area">赤平市</li>
                                                <li class="date">2017/05/10 14:32</li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">oh</li>
                                                <li class="btn_s2">読む</li>
                                            </div></div>
                                    </a>
                                </ul>
                            </li>
                            <li class="clearfix addressmark">
                                <ul>
                                    <div class="leftbox">
                                        <li class="che"><input type="checkbox" name="mail_id[]" value="17299"></li>
                                        <li class="photo_s"><img src="img_read.html?hash=5ee4bb049560867&div_info=pc_site"></li>
                                        <li></li>
                                    </div>
                                    <a href="javascript:keijiban_syousai(17299)">
                                        <div class="rightbox">
                                            <div>
                                                <li class="name">ゆみてす</li>
                                                <li class="age">18歳</li>
                                                <li class="area">赤平市</li>
                                                <li class="date">2017/05/10 14:31</li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">2</li>
                                                <li class="btn_s2">読む</li>
                                            </div></div>
                                    </a>
                                </ul>
                            </li>
                            <li class="clearfix addressmark">
                                <ul>
                                    <div class="leftbox">
                                        <li class="che"><input type="checkbox" name="mail_id[]" value="17297"></li>
                                        <li class="photo_s"><img src="img_read.html?hash=5ee4bb049560867&div_info=pc_site"></li>
                                        <li></li>
                                    </div>
                                    <a href="javascript:keijiban_syousai(17297)">
                                        <div class="rightbox">
                                            <div>
                                                <li class="name">ゆみてす</li>
                                                <li class="age">18歳</li>
                                                <li class="area">赤平市</li>
                                                <li class="date">2017/03/06 13:34</li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">222</li>
                                                <li class="btn_s2">読む</li>
                                            </div></div>
                                    </a>
                                </ul>
                            </li>
                            <li class="clearfix addressmark">
                                <ul>
                                    <div class="leftbox">
                                        <li class="che"><input type="checkbox" name="mail_id[]" value="17296"></li>
                                        <li class="photo_s"><img src="img_read.html?hash=5ee4bb049560867&div_info=pc_site"></li>
                                        <li></li>
                                    </div>
                                    <a href="javascript:keijiban_syousai(17296)">
                                        <div class="rightbox">
                                            <div>
                                                <li class="name">ゆみてす</li>
                                                <li class="age">18歳</li>
                                                <li class="area">赤平市</li>
                                                <li class="date">2017/03/06 13:33</li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">222</li>
                                                <li class="btn_s2">読む</li>
                                            </div></div>
                                    </a>
                                </ul>
                            </li>
                            <li class="clearfix addressmark">
                                <ul>
                                    <div class="leftbox">
                                        <li class="che"><input type="checkbox" name="mail_id[]" value="17295"></li>
                                        <li class="photo_s"><img src="img_read.html?hash=5ee4bb049560867&div_info=pc_site"></li>
                                        <li></li>
                                    </div>
                                    <a href="javascript:keijiban_syousai(17295)">
                                        <div class="rightbox">
                                            <div>
                                                <li class="name">ゆみてす</li>
                                                <li class="age">18歳</li>
                                                <li class="area">赤平市</li>
                                                <li class="date">2017/03/06 13:32</li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">5</li>
                                                <li class="btn_s2">読む</li>
                                            </div></div>
                                    </a>
                                </ul>
                            </li>
                            <li class="clearfix addressmark">
                                <ul>
                                    <div class="leftbox">
                                        <li class="che"><input type="checkbox" name="mail_id[]" value="17294"></li>
                                        <li class="photo_s"><img src="img_read.html?hash=5ee4bb049560867&div_info=pc_site"></li>
                                        <li></li>
                                    </div>
                                    <a href="javascript:keijiban_syousai(17294)">
                                        <div class="rightbox">
                                            <div>
                                                <li class="name">ゆみてす</li>
                                                <li class="age">18歳</li>
                                                <li class="area">赤平市</li>
                                                <li class="date">2017/03/06 13:30</li>
                                            </div>
                                            <div>
                                                <li class="hitokoto">22</li>
                                                <li class="btn_s2">読む</li>
                                            </div></div>
                                    </a>
                                </ul>
                            </li>
                        </ul>
                        <input type="hidden" name="mode">
                        <input type="hidden" name="page" value="0">
                        <input type="hidden" name="mid">
                        <input type="hidden" name="sort" value="%sort%">
                        <input type="hidden" name="url" value="8">
                        <input type="hidden" name="view_by" value="sousin">
                    </form>
                    <div class="mail_btn">
                        <ul>
                            <li><input type="button" value="全選択" onclick="selectAll(true)"></li>
                            <li><input type="button" value="全解除" onclick="selectAll(false)"></li>
                            <li><input type="button" value="チェックした項目を削除する"  onclick="mail_delete();"></li>
                        </ul>
                    </div>
                    <div class="clearfix pager">
                        <p class="fl"></p>
                        <p class="fr"><a href="javascript:goto_page(10)" target="_self">次の10件<span> &raquo;</span></a></p>
                    </div>
                </section>
                <section class="manual">
                    <h3>メールBOXのご利用方法について</h3>
                    <p><span class="ico_new">初</span> ・・・まだやりとりのない、初めてのお相手からのメールです。</p>
                    <p><span class="ico_img"><img src="img/ico_heart.png"></span> ・・・アドレス帳へ登録したお相手からのメールは背景の色が変わり一目で分かります。</p>
                    <p class="fb">※メールBOX内のメールは10日間保管され、期間経過後、自動的に消去されていきます。</p>
                </section>
            </div>
            <!-- /main -->
        </div>
    </div>
    <!-- /content -->

    <!-- ft -->
@endsection