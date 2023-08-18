document.getElementById('subscribete').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
  var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

 var regOficial = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    if (reg.test(campo.value) && regOficial.test(campo.value)) {
      valido.innerText = "";
    } else if (reg.test(campo.value)) {
      valido.innerText = "";

    } else {
      valido.innerText = "Email Invalido";
}
});
$('#subscribe').click(function(){
// e.preventDefault();
    if ($('#subscribete').val().length == 0 && $('#mensage_subscribe').val().length == 0 ||$('#mensage_subscribe').val().length == 0 ||$('#subscribete').val().length == 0) {
        valido = document.getElementById('emailOK');
        valido.innerText = "Compos Obligatorios";   
    }else{
        var dato = $('#subscribete').val();
        var token = $('#token').val();
        var nombres = $(this).attr("subscrib");
        var subjet = $('#mensage_subscribe').val();
        var languaj = $('#subscribe').attr("languaj");
    
    var datosSubscribe = new FormData();
    datosSubscribe.append("nombre", nombres);
    datosSubscribe.append("correo", dato);
    datosSubscribe.append("mensage", subjet);
    $.ajax({
        url: '/subscribe',
        headers:{'X-CSRF-TOKEN':token},
        type:'POST',
        dataType:'json',
        data: datosSubscribe,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.code == 200) {
                $('#mensaje_exito').fadeIn();
                $('#suscripcion').html("");
                $('#exito a').addClass("hidden");
                $('#rpt-modal').html("");
                console.log("languaje",languaj)
                if (languaj==="es") {
                    $('#rpt-modal').append('<div class="flex items-center"><h2 class="text-green-500 text-center text-lg font-bold mr-2 ">Subscrito con Éxito <small>(Revisa tu bandeja de span es posible que los cupones te llegue ahi)</small></h2>');
                } else {
                    $('#rpt-modal').append('<div class="flex items-center"><h2 class="text-green-500 text-center text-lg font-bold mr-2 ">Successfully Subscribed <small>(Check your span tray it is possible that the coupons will arrive there)</small></h2>');
                }
            }
        },error: function(response) {
            valido.innerText = 'El Correo Ingresado ya está suscrito Ingrese un Nuevo Correo';
          }
    });
    }
});

function limpiar(){
    $('#comment_name').val('');
    $('#comment_email').val('');
    $('#comentario').val('');
}
$('#comment').click(function () {
    var nombre_comment = $('#comment_name').val();
    var token_comment = $('#comment_token').val();
    var idcourse_comment = $(this).attr("idCurso");
    var idarticle_comment = $(this).attr("idArticle");
    var email_comment = $('#comment_email').val();
    var comment = $('#comentario').val();

    var datoscomment = new FormData();
    datoscomment.append("nombre", nombre_comment);
    datoscomment.append("correo", email_comment);
    datoscomment.append("courses_id", idcourse_comment);
    datoscomment.append("articles_id", idarticle_comment);
    // datoscomment.append("mensage", subjet);
    datoscomment.append("comentario", comment);
    $.ajax({
        url: '/comments',
        headers: {
            'X-CSRF-TOKEN': token_comment
        },
        type: 'POST',
        dataType: 'json',
        data: datoscomment,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            limpiar();
            $('#success_comment').fadeIn();
            $('#enviar_comment').html("");
    
            $('#error_comment_name').html("");
            $('#error_comment_email').html("");
            $('#error_comment').html("");
        },
        error: function (response) {
            $('#error_comment_name').html("");
            $('#error_comment_name').text(response.responseJSON.errors.nombre);
            $('#error_comment_email').html("");
            $('#error_comment_email').text(response.responseJSON.errors.correo);
            $('#error_comment').html("");
            $('#error_comment').text(response.responseJSON.errors.comentario);
        }
    });
});
