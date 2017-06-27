@extends('layout')
@section('title', '年齢認証')
@section('content')
    <script>
        <!--
        var n = 0;
        function go_submit(mode){
            if(n == 0){
                n = 1;
                document.F1.mode.value=mode;
                document.F1.submit();
            }
            else{
                alert("二重クリック防止");
            }
        }
        function go_alertmsg(){
        }
        //-->
    </script>

<body onload="javascript:go_alertmsg();return false;">
<div id="container">
    <!-- hd -->

    <!-- /hd -->
    <!-- content -->
    <div class="content">
        <div class="content-in">
            <section class="nenrei_info">
                <h2>MEEET 年齢認証</h2>
                <h3>年齢認証について</h3>
                <p>当サイトをご利用頂くには法律に基づき、会員様が1８歳未満ではないことを確認させて頂いております。<br />
                    法を順守し、安心安全にご利用頂くためにもご協力をお願い致します。<br />
                    <br />
                    なお、年齢認証のお手続きには氏名、住所等の個人情報は必要ございませんのでご安心下さい。</p>
                <div>
                    <h3 class="fc1">年齢認証方法</h3>
                    <span class="f150 fb mb10">下記フォームより身分証明証の画像を送信してください。</span>
                    <form name="F1" method="post" enctype="multipart/form-data" action="">
                        <dl>
                            <dt><label for="img">画像の送信</label></dt>
                            <dd class="formbox clearfix">
                                <input type="file" name="img" id="img">
                                <div class="btn_m"><input type="button" value="画像の送信" onclick="go_submit('upload')" ></div>
                            </dd>
                        </dl>
                        <input type="hidden" name="mode">
                    </form>
                </div>
                <h3>身分証明証について</h3>
                <p>
<span class="clearfix imgbox-lr">
<span class="leftbox"><img src="img/img_nenrei01.png.png"></span>
<span class="rightbox">
<span class="fb fc2 f130"><br />必要な項目は3つ<br /><br />・生年月日　・書類名　・発行元<br /><br /></span>
<span>身分証明証の「生年月日「身分証の発行元」「書類名」を確認できる写真・画像もしくはコピーを送付していただき、１８歳未満ではないことを確認させて頂きます。<br /><br /></span>
<span class="fb">証明書は、年齢もしくは生年月日、年齢証明書の発行元、有効期限がはっきり分かる画像をJPEG形式にて送信してください。<br />
※確認に不要な箇所は隠した状態で構いません。</span>
</span>
</span>
                </p>
                <h3>送付方法</h3>
                <p>1．メールにて、身分証を撮影した画像を事務局に送信してください。<br />
                    2．FAX・郵送で送付する場合には余白部分に会員IDをお書き添えの上、弊社まで送付して下さい。<br />
                    <br />
                    メール：info@meeeet.net<br />
                    <br />
                    身分証書類に関しましては徹底して管理をし、確認後破棄させて頂いております｡<br />
                    ご本人様の身分証のみ有効となります｡ </p>
                <h3>年齢認証に有効な書類</h3>
                <p>運転免許証<br />
                    パスポート<br />
                    健康保険被保険者証<br />
                    年金手帳<br />
                    協同組合会員証<br />
                    在留カード<br />
                    身体障碍者手帳<br />
                    その他国や自治体が発行している証明証や書類<br />
                    <br />
                    <br />
                    <span class="fc2">※他人の身分証を提出するのは違法行為です。<br />
※当サイトは18歳以上の場合でも、高校生の利用は固く禁止しております。</span></p>
            </section>
        </div>
    </div>
@endsection