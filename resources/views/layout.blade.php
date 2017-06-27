<!DOCTYPE html>
<html lang="ja">
<head>
    <base href="{{asset('')}}" />
    <meta charset="Shift-JIS">
    <title>DUMMY / @yield('title')</title>
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />

    <meta name="keywords" content="DUMMY,DUMMY" />

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">

    <meta name="description" content="DUMMY" />

    <meta property="og:title" content="DUMMY" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="img/ogp_img.png" />
    <meta property="og:site_name" content="DUMMY" />
    <meta property="og:description" content="DUMMY" />

    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/style.css">
    @if (Auth::check())
    <link rel="stylesheet" href="css/style_login.css">
    @endif
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- pagetop -->
    <script src="js/scrolltopcontrol.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
<!-- hd -->
<div id="container">
@if(Auth::check())
    @include('front-end.commons.logged-header')
@else
    @include('front-end.commons.unlogged-header')
@endif
<!-- /hd -->

<!-- content -->
@yield('content')
<!-- /content -->

<!-- ft -->
@if(Auth::check())
    @include('front-end.commons.footer-login')
@else
    @include('front-end.commons.footer')
@endif
<!-- /ft -->

</div>
</body>
</html>