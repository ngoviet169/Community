$(function () {
    $('.pagetop').click(function () {
        $('body,html').animate({
            scrollTop: 0
        });
        return false;
    });
});