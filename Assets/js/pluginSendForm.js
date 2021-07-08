$(function () {
    /** Pega a url dinâmicamente, porém fica um pouco problemático usar */
    // var urlLocation = window.location.href;
    var urlLocation = "https://localhost/study/study-private/git/gitlab/single-page/";

    $(".sendForm").on("submit", function (e) {
        e.preventDefault();

        var updateData = $(this).serialize();

        $.ajax({
            url: urlLocation + "Config/Helpers/Send/send-form.php",
            data: updateData,
            type: "POST",
            dataType: "json",
            beforeSend: function () {
                $(".content-modal-sendform-general").fadeIn().css("display", "flex");
            },
            success: function (data) {
                console.clear();
                console.log(data);

                if (data.success) {
                    window.setTimeout(function () {
                        window.location.href = urlLocation + "sucesso";
                    }, 500);
                }

                if (data.erro) {                    
                    $(".content-modal-sendform-general").fadeOut().css("display", "flex");
                    window.setTimeout(function () {
                        window.location.href = urlLocation + "erro";
                    }, 500);
                }
            }
        });
        return false;
    });

});