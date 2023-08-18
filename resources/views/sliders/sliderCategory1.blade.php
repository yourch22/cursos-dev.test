<div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    breakpoints: {
        slidesPerView: 1,
        spaceBetween: 0,
    },
  })" class="relative w-full flex flex-row -mt-4">
<div class="absolute inset-y-0 left-0 z-10 flex items-center">
  <button @click="swiper.slidePrev()"
    class="bg-transparent -ml-2 lg:ml-10 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
    <svg viewBox="0 0 20 20" fill="currentColor" class="text-white font-extrabold chevron-left w-6 h-6">
      <path fill-rule="evenodd"
        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
        clip-rule="evenodd"></path>
    </svg>
  </button>
</div>
<div class="swiper-container w-full" x-ref="container">
  <div class="swiper-wrapper">
    <!-- Slides -->
  
      <div class="swiper-slide">
        <div class="flex flex-col shadow overflow-hidden">
          <div loading="lazy" class="flex-shrink-0 h-48 w-full object-cover" style="background: url('{{ asset($categoria[0]['imgBanner']) }}') center; background-size: cover;">
            <!-- <img class="h-48 w-full object-cover" src="img/banner/fotografia.jpg" alt=""> -->
            <div class="grid grid-cols-1 fload md:grid-cols-2 gap-10 mx-4">
              <div class="ml-20 items-center mt-20">
                <h2 class="text-2xl rounded-md text-white font-bold uppercase">{{__('CURSO DE')}} {{ __($categoria[0]['categoria']) }}</h2>
              </div>
        
                @php
                  $fechaActual = date('Y-m-d H:i:s');
                  if ($categoria[0]['finOferta'] > $fechaActual) {
                    echo'<div class="text-white mt-4 text-right mr-20"> <h2 class="text-3xl font-bold">'.__("OFERTAS ESPECIALES").'</h2>';
                    if ($categoria[0]['descuento'] == 0 || $categoria[0]['oferta'] != 0) {
                      echo'<h2 class="text-2xl font-bold">'.__("TODOS LOS CURSOS A").'$'.$categoria[0]['oferta'].'</h2>';
                    }if ($categoria[0]['descuento'] != 0 || $categoria[0]['oferta'] == 0) {
                      echo'<h2 class="text-2xl font-bold">'.__("CURSOS CON").' '.$categoria[0]['descuento'].'% '.__("DE DESCUENTO").'</h2>';
                    }
                    $tiempo1 = new DateTime($categoria[0]['finOferta']);
                    $tiempo2 = new DateTime($fechaActual);
                    $diferenciatiempo = date_diff($tiempo1,$tiempo2);
                    $finOfertas = $diferenciatiempo->format('%a');
                    if ($finOfertas==0) {

                    }
                    if ($finOfertas==0) {
                      echo'<p class="invisible sm:invisible md:visible lg:visible xl:visible text-sm font-bold">'.__("La Oferta Termina Hoy").'</p>';
                    }else if ($finOfertas==1) {
                      echo'<p class="hidden  text-sm font-bold">'.__("La oferta termina en").''.$finOfertas.''.__("Día").'</p>';
                    }else {
                      echo'<p class="hidden  text-sm font-bold">'.__("La oferta termina en").' '.$finOfertas.' '.__("Días").'</p>';
                    }
                    echo'<p class="invisible sm:invisible md:invisible lg:visible xl:visible text-sm font-bold">'.__("La oferta termina en").'</p>';

                    echo'<div id="clockdiv" date="'.$categoria[0]['finOferta'].'"
                        class="invisible sm:invisible md:visible lg:visible xl:visible">
                        <div>
                            <span class="days"></span>
                            <div class="smalltext">'.__("Días").'</div>
                        </div>
                        <div>
                            <span class="hours"></span>
                            <div class="smalltext">'.__("Horas").'</div>
                        </div>
                        <div>
                            <span class="minutes"></span>
                            <div class="smalltext">Min</div>
                        </div>
                        <div>
                            <span class="seconds"></span>
                            <div class="smalltext">Seg</div>
                        </div>
                    </div>
                  </div>';
                  }
                @endphp
            </div>
          </div>
        </div>
      </div>
    @for ($i = 1; $i < 5; $i++)   
      <div class="swiper-slide">
        <div class="flex flex-col shadow overflow-hidden">
          <div class="flex-shrink-0 h-48 w-full object-cover" style="background: url('{{ asset($categorias[$i]['imgBanner']) }}') center; background-size: cover;">
            <!-- <img class="h-48 w-full object-cover" src="img/banner/fotografia.jpg" alt=""> -->
            <div class="grid grid-cols-1 fload md:grid-cols-2 gap-10 mx-4">
              <div class="ml-20 items-center mt-20">
                <h2 class="text-2xl rounded-md text-white font-bold uppercase">{{__('CURSO DE')}} {{ __($categorias[$i]['categoria']) }}</h2>
              </div>
        
                @php
                  $fechaActual = date('Y-m-d H:i:s');
                  if ($categorias[$i]['finOferta'] > $fechaActual) {
                    echo'<div class="text-white mt-4 text-right mr-20"> <h2 class="text-3xl font-bold">'.__("OFERTAS ESPECIALES").'</h2>';
                    if ($categorias[$i]['descuento'] == 0 || $categorias[$i]['oferta'] != 0) {
                      echo'<h2 class="text-2xl font-bold">'.__("TODOS LOS CURSOS A").'$'.$categorias[$i]['oferta'].'</h2>';
                    }if ($categorias[$i]['descuento'] != 0 || $categorias[$i]['oferta'] == 0) {
                      echo'<h2 class="text-2xl font-bold">'.__("CURSOS CON").' '.$categorias[$i]['descuento'].'% '.__("DE DESCUENTO").'</h2>';
                    }
                    if ($finOfertas==0) {

                    }
                    echo'<div class="col-span-2 text-right mt-2">
                            <a href="#" class="text-indigo-700 bg-indigo-100 hover:bg-indigo-200 font-bold py-3 px-8 rounded inline-flex items-center">
                                <span>'.__('Ver Oferta').'</span>
                                <svg class="fill-current w-4 h-4 ml-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 511.992 511.992" style="enable-background:new 0 0 511.992 511.992;" xml:space="preserve">
                                        <path d="M510.096,249.937c-4.032-5.867-100.928-143.275-254.101-143.275C124.56,106.662,7.44,243.281,2.512,249.105
                                            c-3.349,3.968-3.349,9.792,0,13.781C7.44,268.71,124.56,405.329,255.995,405.329S504.549,268.71,509.477,262.886
                                            C512.571,259.217,512.848,253.905,510.096,249.937z M255.995,383.996c-105.365,0-205.547-100.48-230.997-128
                                            c25.408-27.541,125.483-128,230.997-128c123.285,0,210.304,100.331,231.552,127.424
                                            C463.013,282.065,362.256,383.996,255.995,383.996z"/>
                                        <path d="M255.995,170.662c-47.061,0-85.333,38.272-85.333,85.333s38.272,85.333,85.333,85.333s85.333-38.272,85.333-85.333
                                            S303.056,170.662,255.995,170.662z M255.995,319.996c-35.285,0-64-28.715-64-64s28.715-64,64-64s64,28.715,64,64
                                            S291.28,319.996,255.995,319.996z"/>
                                </svg>
                            </a>
                          </div>
                  </div>';
                  }
                @endphp
            </div>
          </div>
        </div>
      </div>
    @endfor
  </div>
</div>

<div class="absolute inset-y-0 right-0 z-10 flex items-center">
  <button @click="swiper.slideNext()"
    class="bg-transparent -mr-2 lg:mr-10 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
    <svg viewBox="0 0 20 20" fill="currentColor" class="text-white font-extrabold chevron-right w-6 h-6">
      <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd"></path>
    </svg>
  </button>
</div>
</div>

