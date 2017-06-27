$(function () {
    var $menu = $('#slide_menu'), // スライドインするメニューを指定
        $menuBtn = $('#btn_navi'), // トリガーとなるボタンを指定
        $wrap = $('#container'),
        menuWidth = $menu.outerWidth();

    $menuBtn.on('click', function () {
        $wrap.toggleClass('open');
        if ($wrap.hasClass('open')) {
            $wrap.animate({'left': menuWidth}, 300);
            $menu.animate({'left': 0}, 300);
        } else {
            $wrap.animate({'left': 0}, 300);
            $menu.animate({'left': -menuWidth}, 300);
        }
    });
});

jQuery(function ($) {
    var nav = $('#fixedBox'),
        offset = nav.offset();
    $(window).scroll(function () {
        if ($(window).scrollTop() > offset.top) {
            nav.addClass('fixed');
        } else {
            nav.removeClass('fixed');
        }
    });
});
