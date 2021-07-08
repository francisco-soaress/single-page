$(function(){

    setInterval(function(){

        var _seconds = 1000;
        var _minutes = _seconds * 60;
        var _hours = _minutes * 60;
        var _days = _hours * 24;

        var currentDate = new Date();
        var endDate = new Date("2021/10/09 19:00:00");

        var diferent = endDate - currentDate;

        var days = Math.floor(diferent / _days);
        var hours = Math.floor((diferent % _days) / _hours);
        var minutes = Math.floor((diferent % _hours) / _minutes);
        var seconds = Math.floor((diferent % _minutes) / _seconds);

        hours = hours <= 9 ? "0" + hours : hours;
        minutes = minutes <= 9 ? "0" + minutes : minutes;
        seconds = seconds <= 9 ? "0" + seconds : seconds;

        /* ==== day : minutes : seconds ==== */
        day = "<div class='contador-format-txt'> " + days + "<div class='contador-data-txt'>Dias</div></div><span class='contador-dois-ponto'>:</span>" 
        + 
        "<div class='contador-format-txt'> " + hours + " <div class='contador-data-txt'> Horas </div></div> <span class='contador-dois-ponto'>:</span>" +
            "<div class='contador-format-txt'>" + minutes + "<div class='contador-data-txt'>Minutos</div></div><span class='contador-dois-ponto'>:</span>" +
            "<div class='contador-format-txt'>" + seconds + "<div class='contador-data-txt'>Segundos</div></div>";

        $("#contador-data").html(day);
        $("#contador-data").attr({"title": "Faltam apenas: " + days + "dias - " + hours + ":" + minutes + ":" + seconds + " para o fim da promoção."});
    }, 1000);
});