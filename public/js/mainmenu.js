$(".navegacionbuton").on("click", function () {
    $(".items-navegacion").toggleClass("hidden");
   });
   $(".subscripcionbuton").on("click", function () {
    $(".item-subscripcion").toggleClass("hidden");
   });
   $(".subscripcionbuton-close").on("click", function () {
    $(".item-subscripcion").toggleClass("hidden");
   //  $('.exito').addClass("hidden");
   });
   function navToggle() {
           var btn = document.getElementById('menuBtn');
           var nav = document.getElementById('menu');

           btn.classList.toggle('open');
           nav.classList.toggle('flex');
           nav.classList.toggle('hidden');
       }
       var openmodal = document.querySelectorAll('.modal-open')
       for (var i = 0; i < openmodal.length; i++) {
           openmodal[i].addEventListener('click', function(event){
           event.preventDefault()
           toggleModal()
           })
       }
       var closemodal = document.querySelectorAll('.modal-close')
       for (var i = 0; i < closemodal.length; i++) {
           closemodal[i].addEventListener('click', toggleModal)
       }
       document.onkeydown = function(evt) {
           evt = evt || window.event
           var isEscape = false
           if ("key" in evt) {
           isEscape = (evt.key === "Escape" || evt.key === "Esc")
           } else {
           isEscape = (evt.keyCode === 27)
           }
           if (isEscape && document.body.classList.contains('modal-active')) {
           toggleModal()
           }
       };
       function toggleModal () {
           const body = document.querySelector('body')
           const modal = document.querySelector('.modal')
           modal.classList.toggle('opacity-0')
           modal.classList.toggle('pointer-events-none')
           body.classList.toggle('modal-active')
       }
     const cookieContainer = document.querySelector(".cookie-container");
     const cookieButton = document.querySelector(".cookie-btn");
     
     cookieButton.addEventListener("click", () => {
       cookieContainer.classList.remove("active");
       localStorage.setItem("cookieBannerDisplayed", "true");
     });
     setTimeout(() => {
       if (!localStorage.getItem("cookieBannerDisplayed")) {
         cookieContainer.classList.add("active");
       }
     }, 2000);