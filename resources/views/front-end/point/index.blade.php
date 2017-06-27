@extends('layout')
@section('title', 'ポイントチャージ')
@section('content')
    <!-- content -->
    <div class="content">
        <div class="content-in clearfix">
            <!-- side -->
            @include('front-end.commons.sidebar')
            <!-- /side -->
            <!-- main -->
            <div class="main">
                <section class="banner">

                </section>
                <section class="point">
                    <h2>ポイントチャージ</h2>
                    <form method="post" name="F1" action="" style="margin:0;">
                        <ul>
                            <li>
                                <h3>クレジット決済</h3>
                                <p>クレジットカード決済にてリアルタイムで24時間いつでもポイントを購入できます。<br><br></p>
                                <div class="btn_l2">
                                    <a href="javascript:go_submit_method(2)">クレジット決済で購入</a>
                                </div>
                                </a>
                            </li>
                            <li>
                                <h3>コンビニ決済</h3>
                                <p>日本全国のコンビニで24時間365日いつでもお支払いが可能な、大変便利な決済手段です。<br><br></p>
                                <div class="btn_l2">
                                    <a href="javascript:go_submit_method(5)">コンビニ決済で購入</a>
                                </div>
                                </a>
                            </li>
                            <!-- <li>
                            <h3>BitCash</h3>
                            <p>全国のコンビニ各店舗やネットでご購入頂けるプリペイド式電子マネーです。<br><br></p>
                            <div class="btn_l2">
                            <a href="javascript:go_submit_method(3)">BitCashで購入</a>
                            </div>
                            </a>
                            </li> -->
                        </ul>
                        <input type="hidden" name="mode" value="money_select">
                        <input type="hidden" name="pay_method" value="">
                    </form>
                </section>
                <section class="manual pointmanual">
                    <h3>消化ポイントについて</h3>
                    <p>消化ポイントの一覧は<a href="ryoukin.html">こちら</a>のページをご確認下さい。</p>
                </section>
            </div>
            <!-- /main -->
        </div>
    </div>
@endsection