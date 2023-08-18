$(document).on("mouseover", "#listacategorias", (function () {
    var a = $(this).attr("idcategoria");
    var t = $(this).attr("tipo");
    var lang = $(this).attr("lang");
    var datossubcategory = new FormData();
    datossubcategory.append("idCategoria", a);
    datossubcategory.append("language", lang);
    $.ajax({
        url: "/subcategorias/" + a,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "GET",
        data: datossubcategory,
        cache: !1,
        contentType: !1,
        processData: !1,
        dataType: "json",
        success: function (a) {
            $("#listasubcategorias").html("");
            for (var s = 0; s < a.length; s++){
                if (lang==="es") {
                    $("#listasubcategorias").
                    append('<a  href="/' + t + "/" + a[s].ruta + '/1" class="-m-3 p-1 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">'+
                    '<div class="space-y-1"> <p class="text-base leading-6 font-medium text-gray-900">' +a[s].subcategoria+'</p></div> </a>')
                } else {
                    $("#listasubcategorias").
                    append('<a  href="/' + t + "/" + a[s].ruta + '/1" class="-m-3 p-1 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">'+
                    '<div class="space-y-1"> <p class="text-base leading-6 font-medium text-gray-900">' +a[s].subcategory+'</p></div> </a>')
                }
                
            } 
        }
    });
}));