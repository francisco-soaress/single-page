$(function () {

    /**
     * ==== IMPLEMENTAÇÃO ====
     * No final do Body da página, insira o arquivo .js (pluginModalOutPage.js)
     * Dentro do Body da página, faça um require do arquivo .php (pluginModalOutPage.php)
     * Dentro do Head da página, insira o arquivo .css (pluginModalOutPage.css)
     */

    /** ==== modal */
    $(document).on("mouseleave", function () {
        $('.content-modal-outpage').fadeIn().css('display', 'flex');
    });
    $('.modal-close-outpage').on("click", function () {
        $('.content-modal-outpage').remove();
    });
    $('.box-text-outpage a').on("click", function () {
        $('.content-modal-outpage').remove();
    });

});