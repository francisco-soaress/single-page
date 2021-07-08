$(function(){

    setInterval(function(){
        var currentDate = new Date();
        var hours = Math.floor(24 - currentDate.getHours());
        var minutes = Math.floor(60 - currentDate.getMinutes());
        var seconds = Math.floor(59 - currentDate.getSeconds());

        hours = hours <= 9 ? "0" + hours : hours;
        minutes = minutes <= 9 ? "0" + minutes : minutes;
        seconds = seconds <= 9 ? "0" + seconds : seconds;

        /* ==== day : minutes : seconds ==== */
        day = "<div class='contador-format-txt'> " + hours + "<div class='contador-data-txt'>Horas</div></div><span class='contador-dois-ponto'>:</span>" +
            "<div class='contador-format-txt'>" + minutes + "<div class='contador-data-txt'>Minutos</div></div><span class='contador-dois-ponto'>:</span>" +
            "<div class='contador-format-txt'>" + seconds + "<div class='contador-data-txt'>Segundos</div></div>";

        $("#contador-data-dia").html(day);
        $("#contador-data-dia").attr({"title": "Faltam apenas: " + hours + ":" + minutes + ":" + seconds + " para o fim da promoção."});
    }, 1000);
});