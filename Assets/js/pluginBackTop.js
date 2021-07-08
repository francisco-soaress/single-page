$(function () {
    
    function backTop(){

        var body = $("body");
        body.addClass("backTopScroll");

        // Inserindo a div abaixo do Body
        body.prepend("<div class='topBack icon-angle-up icon-notext'></div>")
        var topBack = $(".topBack");
        
        // Definindo a css
        topBack.css({
            "position": "fixed",
            "display": "none",
            "border": "1px #3d70c7 solid",
            "cursor": "pointer",
            "bottom": "20px",
            "right": "20px",
            "color": "#3d70c7",
            "font-size": "0.8em",
            "padding": "10px 15px",
            "z-index": "99",
            "border-radius": "5px",
            "-webkit-border-radius": "5px",
            "-moz-border-radius": "5px"
        });
        
        // function hover
        topBack.hover(function(){
            $(this).css({
                "background": "#3d70c7",
                "color": "#fff",
                "transition": "all 0.1s ease"
            });
        }, function(){
            $(this).css({
                "background": "none",
                "color": "#3d70c7",
                "border": "1px #3d70c7 solid",
                "transition": "all 0.1s ease"
            });
        });

        // Mostrando o scroll
        $(window).scroll(function(){
            var positionScroll = $(this).scrollTop();
            var positionClass = $(".backTopScroll").offset().top + 200;

            if (positionScroll > positionClass) {
                topBack.fadeIn();
            }else{
                topBack.fadeOut();
            }            
        }); 
        
        // Ao clicar, volta para o topo
        topBack.on("click", function () {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
        });
    }

    backTop();
});