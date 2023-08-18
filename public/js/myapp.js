function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
};
function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }
    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
};
var fecha = $("#clockdiv").attr("date");
initializeClock('clockdiv', fecha);
/*=============================================
VALIDAR OFERTAS
=============================================*/
var valorDescuento = $(".valorDescuento");
var precioFinal = $(".precioFinal");
var precioReal = $(".precioReal");
var precioRealArray = [];
var precioFinalArray = [];
var valorDescuentoArray = [];
var precioFinalConDescuento = [];
for (var i = 0; i < precioReal.length; i++) {
    precioRealArray[i] = Number($(precioReal[i]).html().substr(1));
    precioFinalArray[i] = Number($(precioFinal[i]).html());
    valorDescuentoArray[i] = Number($(valorDescuento[i]).html());
    if (valorDescuentoArray[i] == 0) {
        $(valorDescuento[i]).html(100 - (precioFinalArray[i] * 100 / precioRealArray[i]).toFixed());
    } else {
        precioFinalConDescuento[i] = precioRealArray[i] - (precioRealArray[i] * valorDescuentoArray[i] / 100).toFixed();
        if (precioFinalConDescuento[i] < 10) {
            $(precioFinal[i]).html(9.99);
            $(valorDescuento[i]).html(100 - (9.99 * 100 / precioRealArray[i]).toFixed());
        } else {
            $(precioFinal[i]).html(precioFinalConDescuento[i].toFixed(2));
        }
    }
}

