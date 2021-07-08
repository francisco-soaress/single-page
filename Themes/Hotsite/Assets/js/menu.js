$(function () {

    /* ==== link ancora do menu */
    // LEMBRE: na variavel (goto), se não conseguir pegar o local, ou valor da posição, o mesmo da erro
    $("body a[class!='special']").on("click", function () {
        var goto = $('.' + $(this).attr('href').replace('#', '')).position().top;
        $("html, body").animate({
            scrollTop: goto - $('.header_all').outerHeight()
        }, 1000);
        return false;

    });

    /* ==== menu fixo a partir de uma posição */
    $(window).scroll(function () {
        positionClass = $('.main_menu_fixed').offset().top;
        positionScroll = $(this).scrollTop();

        if (positionScroll > positionClass) {
            $('.main_menu').addClass("main_menu_fixo");
            $('.main_menu ul').css({
                "-webkit-box-shadow": "0px 2px 2px 0px rgba(0,0,0,0.10)",
                "-moz-box-shadow": "0px 2px 2px 0px rgba(0,0,0,0.10)",
                "box-shadow": "0px 2px 2px 0px rgba(0,0,0,0.10)"                
            });
            $('.j_back').fadeIn('slow');
        } else {
            $('.main_menu').removeClass("main_menu_fixo");
            $('.main_menu ul').css({
                "-webkit-box-shadow": "none",
                "-moz-box-shadow": "none",
                "box-shadow": "none"
            });
            $('.j_back').fadeOut('slow');
        }
    });

    /* ==== back top */
    $('.j_back').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });
});