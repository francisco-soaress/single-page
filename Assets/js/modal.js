$(function(){

    /** ==== modal */
    $(document).mouseleave(function(){
        $('.content-modal').fadeIn().css('display', 'flex');
    });
    $('.modal-close').click(function(){
        $('.content-modal').remove();
    });

});