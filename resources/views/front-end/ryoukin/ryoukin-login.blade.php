@extends('layout')

@section('title', ' 料金表')
    @section('content')
        <div class="content">
            <div class="content-in clearfix">
                <!-- side -->
                @include('commons.sidebar')
                <!-- /side -->
                <!-- main -->
                <div class="main">
                    <section class="banner">
                        <a href=""><img src="img/img_banner01@2x.png" alt=""></a>
                    </section>
                    <section class="ryoukin">
                        <h2>MEET 料金表</h2>
                        <ul>
                            <li>
                                <table class="table01">
                                    <tbody>
                                    <tr>
                                        <td><span class="fc1">■ </span>入会費／年会費</td>
                                        <td>0pt</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fc1">■ </span>プロフィール更新</td>
                                        <td>0pt</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fc1">■ </span>掲示板検索</td>
                                        <td>0pt</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fc1">■ </span>掲示板閲覧</td>
                                        <td>1pt</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fc1">■ </span>掲示板投稿</td>
                                        <td>10pt</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <table class="table01">
                                    <tbody>
                                    <tr>
                                        <td><span class="fc1">■ </span>通常メールを読む<span class="fc1"> (※)</span></td>
                                        <td>20pt</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fc1">■ </span>通常メールを送る</td>
                                        <td>30pt</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fc1">■ </span>画像付メールを読む<span class="fc1"> (※)</span></td>
                                        <td>20pt</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fc1">■ </span>画像付メールを送る</td>
                                        <td>30pt</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fc1">■ </span>既読メールを読む</td>
                                        <td>0pt</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                        <div class="textbox">
                            <span class="ar mb15 f120"><span class="fc1"> (※) </span>新着メール開封時のみ。</span>
                            <span class="fc1 f250 fb mb10">1ポイント=10円</span>
                            <p>初めてのお客様の為に無料お試し期間をご用意しております。その為、突然の料金発生などは一切ございません。<br>
                                あくまでお客様の自由意志によりお客様の責任の下にご利用できるシステムになっております。</p>
                        </div>
                    </section>
                </div>
                <!-- /main -->
            </div>
        </div>
       @endsection