$(".buscador_descuentos").change((function () {
    var idioma= $('#languaje').attr("idioma");
    var searh = $(this).val();
    if (/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/.test(searh)) {
        var c = searh.replace(/[áéíóúÁÉÍÓÚ ]/g, "-");
        $(".buscar_descuentos").click((function () {
            "" != $(".buscador_descuentos").val() && (window.location = "/courses-search/" + c );
        }))
    } else $(".buscador_descuentos").val("")
})), 
$(document).on("keyup", ".buscador_descuentos", (function (a) {
    if (a.preventDefault(), 13 == a.keyCode && "" != $(".buscador_descuentos").val()) {
        var idioma= $('#languaje').attr("idioma");
        var c = $(".buscador_descuentos").val();
        if (/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/.test(c)) {
            var e = c.replace(/[áéíóúÁÉÍÓÚ ]/g, "-");
            window.location = "/courses-search/" + e;
        } else $(".buscador_descuentos").val("");
    }
}));