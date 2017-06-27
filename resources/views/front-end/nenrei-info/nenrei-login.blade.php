@extends('layout')
@section('title', '年齢認証')
    @section('content')
        <div class="content">
            <div class="content-in clearfix">
                <!-- side -->
                @include('commons.sidebar')
                <!-- /side -->
                <!-- main -->
                <div class="main">
                    <section class="banner">
                        <div align="center" id="mmidasi"><a href="/kensaku_r.html"><img src="img/cp/720_200.jpg" border="0" style="width=720,height=200"></a></div>
                    </section>
                    <section class="nenrei">
                        <h2>MEET 年齢認証</h2>
                        <div class="inner">
                            <div>
                                <h3>年齢認証について</h3>
                                <p>2009年2月1日より、利用者同士の情報のやりとりの際に<span class="fc2">年齢確認</span>が義務づけられました。運転免許証などの身分証明証の提示（画像送信）により認証完了となります。
                                </p>
                            </div>
                            <div>
                                <h3 class="fc1">年齢認証方法</h3>
                                <p class="f150 fb mb10">下記フォームより身分証明証の画像を送信してください。</p>
                                <form name="F1" method="post" enctype="multipart/form-data" action="">
                                    <dl>
                                        <dt><label for="img">画像の送信</label></dt>
                                        <dd class="formbox clearfix">
                                            <input type="file" name="img" id="img">
                                            <div class="btn_m"><input type="button" value="画像の送信" onclick="go_submit('upload')"></div>
                                        </dd>
                                    </dl>
                                    <input type="hidden" name="mode">
                                </form>
                            </div>
                            <div>
                                <h3>身分証明証について</h3>
                                <p>
<span class="clearfix imgbox-lr">
<span class="leftbox mb10"><img src="img/img_nenrei01.png"></span>
<span class="rightbox">
<span class="fb fc2 f130"><br>必要な項目は3つ<br><br>・生年月日　・書類名　・発行元<br><br></span>
<span>身分証明証の「生年月日「身分証の発行元」「書類名」を確認できる写真・画像もしくはコピーを送付していただき、１８歳未満ではないことを確認させて頂きます。<br><br></span>
</span>
<span class="fb fl">証明書は、年齢もしくは生年月日、年齢証明書の発行元、有効期限がはっきり分かる画像をJPEG形式にて送信してください。※確認に不要な箇所は隠した状態で構いません。</span>
</span>
                                </p>
                            </div>
                            <div>
                                <h3>送付方法</h3>
                                <p>1．メールにて、身分証を撮影した画像を事務局に送信してください。<br>
                                    2．FAX・郵送で送付する場合には余白部分に会員IDをお書き添えの上、弊社まで送付して下さい。<br>
                                    <br>
                                    メール：info@meeeet.net<br>
                                    FAX：(03) 1234 5678<br>
                                    <br>
                                    身分証書類に関しましては徹底して管理をし、確認後破棄させて頂いております｡<br>
                                    ご本人様の身分証のみ有効となります｡ </p>
                            </div>
                            <div>
                                <h3>年齢認証に有効な書類</h3>
                                <p>運転免許証<br>
                                    パスポート<br>
                                    健康保険被保険者証<br>
                                    年金手帳<br>
                                    協同組合会員証<br>
                                    在留カード<br>
                                    身体障碍者手帳<br>
                                    その他国や自治体が発行している証明証や書類<br>
                                    <br>
                                    <br>
                                    <span class="fc2">※他人の身分証を提出するのは違法行為です。<br>
※当サイトは18歳以上の場合でも、高校生の利用は固く禁止しております。</span>
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /main -->
            </div>
        </div>
        @endsection