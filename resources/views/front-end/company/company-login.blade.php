@extends('layout')
@section('title', '特定商取引法表記')
    @section('content')
        <div class="content">
            <div class="content-in clearfix">
                <!-- side -->
                @include('commons.sidebar')
                <!-- /side -->
                <!-- main -->
                <div class="main">
                    <section class="company">
                        <h2>MEET 特定商取引法表記</h2>
                        <table class="table01">
                            <tbody>
                            <tr>
                                <td><span class="fc1">● </span>番組名</td>
                                <td>MEET</td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>運営事業者名</td>
                                <td><img src="img/textimg03@2x.png" alt="textimg03" width="279" height="14"></td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>所在地</td>
                                <td><img src="img/textimg05@2x.png" alt="textimg05" width="590" height="36"><br>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>運営責任者</td>
                                <td><img src="img/textimg07@2x.png" alt="textimg07" width="133" height="17"></td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>TEL</td>
                                <td><img src="img/textimg06@2x.png" alt="textimg06" width="112" height="17"><br>( 受付時間：9時～19時迄 )</td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>メールアドレス</td>
                                <td><img src="img/textimg01@2x.png" alt="textimg01" width="117" height="15"><br>( 受付時間：9時～19時迄 )</td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>価格</td>
                                <td><a href="ryoukin.html">コチラ</a><br>料金表をご確認下さい。</td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>支払い時期と方法</td>
                                <td>時期：ポイント購入時<br>
                                    方法：クレジット決済 コンビニ決済（クレジット決済サービスは米国ドル建て決済となリ、カードの請求額は為替変動また手数料により決済額と請求額が異なる場合がございます。）</td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>商品引渡し時期</td>
                                <td>入金確認後即</td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>返品、返還の特約</td>
                                <td>すでにお支払いされた料金の返還や、購入ポイントの払い戻しは行っておりません。<br>
                                    詳しくは利用規約をご確認下さい。</td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>入会、退会における費用</td>
                                <td>なし</td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>価格や送料以外の付加的費用</td>
                                <td>なし</td>
                            </tr>
                            <tr>
                                <td><span class="fc1">● </span>お問い合わせについて</td>
                                <td>電話、メールにて受け付けております。<br>
                                    営利目的の電話やメールはご遠慮下さい。<br>
                                    当サイトが提供する情報・画像を利用者の許可なく複製、転用、販売等の二次利用は固く禁じます。</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
                <!-- /main -->
            </div>
        </div>
        @endsection