$(function () {

    /* Função de Scroll:
    O mesmo pega a URL e gera o scroll para determinado conteudo do site
    */
    function scrollAnchor() {
        
        var currentUrl = window.location.href;
        currentUrl = currentUrl.substring(currentUrl.indexOf("#") + 1);
        var targetOffSet = $("<a href='" + currentUrl + "'></a>");
        var go = $('.' + $(targetOffSet).attr("href").replace("#", "")).position().top;

        setTimeout(function () {
            $("html, body").animate({
                scrollTop: go
                // scrollTop: go - $(".header_all").outerHeight()
            }, 2000);
        }, 500);
    }
    scrollAnchor();
});