$(".buscador_free").change((function () {
    var idioma= $('#languaje').attr("idioma");
    var searh = $(this).val();
    if (/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/.test(searh)) {
        var c = searh.replace(/[áéíóúÁÉÍÓÚ ]/g, "-");
        $(".buscar_free").click((function () {
            "" != $(".buscador_free").val() && (window.location = "/search-udemy-free/" + c + "/1");
        }))
    } else $(".buscador_free").val("")
})), 
$(document).on("keyup", ".buscador_free", (function (a) {
    if (a.preventDefault(), 13 == a.keyCode && "" != $(".buscador_free").val()) {
        var idioma= $('#languaje').attr("idioma");
        var c = $(".buscador_free").val();
        if (/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/.test(c)) {
            var e = c.replace(/[áéíóúÁÉÍÓÚ ]/g, "-");
            window.location = "/search-udemy-free/" + e + "/1";
        } else $(".buscador_free").val("");
    }
}));