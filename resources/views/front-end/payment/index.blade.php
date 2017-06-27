@extends('layout')

@section('title', '資金決済法表記')
@section('content')
    <div class="content">
        <div class="content-in">
            <section class="payment">
                <h2>DUMMY 資金決済法表記</h2>
                <table class="table01">
                    <tbody>
                    <tr>
                        <td><span class="fc1">● </span>発行事業者</td>
                        <td>会社名　株式会社XXX<br />
                            住所　東京都XXXXXXXX<br />
                            サイトURL　http://dummy.com</td>
                    </tr>
                    <tr>
                        <td><span class="fc1">● </span>支払い可能金額</td>
                        <td>チャージポイント上限金額はございません。</td>
                    </tr>
                    <tr>
                        <td><span class="fc1">● </span>有効期限</td>
                        <td>取得されたアカウント、またはポイントの有効期限はございません。<br />
                            ただし、DUMMY（http://dummy.com）の会員が最終ログインから一年経過した場合、ポイント残高は弊社に帰属するものとします。</td>
                    </tr>
                    <tr>
                        <td><span class="fc1">● </span>ご相談窓口</td>
                        <td>住所　東京都XXXXXXXX<br />
                            メールアドレス　<a href="mailto:info@dummy.com">info@dummy.com</a></td>
                    </tr>
                    <tr>
                        <td><span class="fc1">● </span>使用場所</td>
                        <td>ポイントはDUMMY（http://dummy.com）上において使用することができます。</td>
                    </tr>
                    <tr>
                        <td><span class="fc1">● </span>利用上の注意</td>
                        <td>すでにお支払いされた料金の返還や、購入されたポイントの払い戻しは行っておりません。<br />
                            詳しくは<a href="kiyaku.html">利用規約</a>をご確認下さい。</td>
                    </tr>
                    <tr>
                        <td><span class="fc1">● </span>未使用残高の確認方法</td>
                        <td>ポイント残高は、DUMMY（http://dummy.com）においてログインすることにより、ページ上部の項目にて常時ご確認頂けます。<br /></td>
                    </tr>
                    <tr>
                        <td><span class="fc1">● </span>利用規約</td>
                        <td>詳しくは<a href="kiyaku.html">利用規約</a>を御覧ください。</td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
@endsection