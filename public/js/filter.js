// $("#search_coupons").click(function () {
//     var search_coupons = $(this).attr("category");
//     $("#search_coupons").click(function () {
 
//         window.location = "/coupons/" + search_coupons;
//     });
// });



// $('#search_coupons').click('#search_coupons',function(){
//     // e.preventDefault();
//         var search_coupons = $("#search_coupons").attr('category');
//         $.ajax({
//             url: "/coupons/" + search_coupons,
//             type:'GET',
//             dataType:'json',
//             data: {
//                 '_token':'{{csrf_token()}}',
//                 search_coupons:search_coupons,
//             },
//             cache: false,
//             contentType: false,
//             processData: false,
//             success: function (response) {
//             }
            
//             // ,error: function(response) {
//             //     valido.innerText = 'El Correo Ingresado ya está suscrito Ingrese un Nuevo Correo';
//             //   }
//         });
        
//     });