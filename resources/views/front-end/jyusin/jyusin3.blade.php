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
                        <li class="stay"><a href="jyusin3.html">お知らせ</a></li>
                        <li><a href="sousin.html">送　信</a></li>
                    </ul>
                </section>
                <form method="post" name="F1" action="" style="margin:0;">
                    <section class="mailbox infomail">
                        <div class="clearfix">
                            <h2 class="fl">お知らせメールBOX</h2>
                            <p class="pointinfo">※ポイントはかかりませんので是非ご覧ください。</p>
                        </div>
                        <ul>
                        </ul>
                        <div class="mail_btn">
                            <ul>
                                <li><input type="button" value="全選択" onclick="selectAll(true)"></li>
                                <li><input type="button" value="全解除" onclick="selectAll(false)"></li>
                                <li><input type="button" value="チェックした項目を削除する"  onclick="mail_delete();"></li>
                            </ul>
                        </div>
                        <div class="clearfix pager">
                            <p class="fl"></p>
                            <p class="fr"></p>
                        </div>
                    </section>
                    <input type="hidden" name="mode">
                    <input type="hidden" name="page" value="0">
                    <input type="hidden" name="mid">
                    <input type="hidden" name="url" value="6">
                </form>
                <section class="manual">
                    <h3>メールBOXのご利用方法について</h3>
                    <p class="fb">※メールBOX内のメールは10日間保管され、期間経過後、自動的に消去されていきます。</p>
                </section>
            </div>
            <!-- /main -->
        </div>
    </div>
    <!-- /content -->

    <!-- ft -->
@endsection