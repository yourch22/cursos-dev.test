<div class="w-full bg-gray-500 bg-cover bg-no-repeat bg-center relative z-10"
style="background-blend-mode:multiply; background-position:center;background-image:url('{{ asset('img/banner/it-y-software.jpg') }}');">
<div class="p-10 py-12 flex flex-col flex-wrap justify-center content-center">
    <div class="m-0 p-0 text-3xl  text-white  antialiased  text-center">{{__('Suscríbete a nuestro boletín')}}</div>
    <div class="m-0 p-0 text-xl  text-white  antialiased  text-center">{{__('Reciba los últimos Cupones y promociones')}}
        <a href="#"><span class="text-red-600 font-bold">({{__('Solicitar Cupón')}})</span></a></span>
    </div>
    <div id="suscripcion" class="mt-3 flex flex-row flex-wrap">
        <input type="email" class="subscripcionbuton text-gray-600 w-2/3 p-2  rounded-l-lg" placeholder="Email"
            required />
        <button class="p-2 w-1/3 bg-indigo-400 rounded-r-lg text-white hover:bg-indigo-300"
             type="button">{{__('Suscribirme')}}</button>
    </div>
    <section class="flex items-center justify-center mx-3" id="mensaje_exito" style="display: none">
        <div class="flex items-center bg-white shadow  rounded-md mt-3 px-2 mx-4" style="width: 24rem;">
            <div class="mr-6 bg-green-500 rounded px-4 py-2  text-center -ml-3">
                <svg fill="none" viewBox="0 0 24 24" class="w-8 h-8 text-white" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div class="flex items-center">
                <h2 class="text-green-500 text-md font-bold mr-2 ">{{__('Subscrito con Éxito')}}</h2>
            </div>
        </div>
        <!--one-->
    </section>
</div>
</div>

<div id="modal-clouse" class="item-subscripcion hidden fixed w-full h-100 inset-0 z-50  flex justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">
    <div  class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 px-6">
                <div class="subscripcionbuton-close cursor-pointer z-50 ml-96">
                    <svg class="fill-current text-black text-bold" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            <!--Body-->
            <div class="wrapper bg-white rounded-sm shadow-lg">
                <div class="card px-8 py-4">
                    <div class="card-image mb-4">
                        <svg class="w-10 h-10 text-oranges550 fill-current"
                            xmlns="http://www.w3.org/2000/svg" 
                            width="512" height="512.002" 
                            viewBox="0 0 512 512.002">
                            <g transform="translate(0 0.002)">
                                <path d="M64,257.6,227.9,376a47.72,47.72,0,0,0,56.2,0L448,257.6V96a32,32,0,0,0-32-32H96A32,32,0,0,0,64,96ZM160,160a16,16,0,0,1,16-16H336a16,16,0,0,1,16,16v16a16,16,0,0,1-16,16H176a16,16,0,0,1-16-16Zm0,80a16,16,0,0,1,16-16H336a16,16,0,0,1,16,16v16a16,16,0,0,1-16,16H176a16,16,0,0,1-16-16Z" opacity="0.4"/><path d="M352,160a16,16,0,0,0-16-16H176a16,16,0,0,0-16,16v16a16,16,0,0,0,16,16H336a16,16,0,0,0,16-16Zm-16,64H176a16,16,0,0,0-16,16v16a16,16,0,0,0,16,16H336a16,16,0,0,0,16-16V240A16,16,0,0,0,336,224ZM329.4,41.4C312.6,29.2,279.2-.3,256,0c-23.2-.3-56.6,29.2-73.4,41.4L152,64H360ZM64,129c-23.9,17.7-42.7,31.6-45.6,34A48,48,0,0,0,0,200.7v10.7l64,46.2Zm429.6,34c-2.9-2.3-21.7-16.3-45.6-33.9V257.6l64-46.2V200.7A48,48,0,0,0,493.6,163ZM256,417.1a79.989,79.989,0,0,1-46.888-15.192L0,250.9V464a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V250.9l-209.1,151A80,80,0,0,1,256,417.1Z"/>
                            </g>
                        </svg>
                    </div>
                    <div id="rpt-modal">
                    <div class="card-text">
                        <h1 class="text-xl md:text-2xl font-bold leading-tight text-gray-900">{{__('¡Obtenga los últimos Cupones en su bandeja de entrada!')}}</h1>
                        <p class="text-base md:text-lg text-gray-700 mt-3 ">{{__('¡Únete a más de 5k suscriptores felices!')}}
                            <span class="text-red-800 font-semibold">({{__('Solicita tu Cupón')}})</span></p>
                    </div>
                    <input type="hidden" id="token" value="{{ csrf_token() }}" />
                        <textarea name="mensage_subscribe" id="mensage_subscribe" class="appearance-none w-full border border-gray-200 p-2 focus:border-gray-500" placeholder="{{__('Ingresa Nombre del curso o Tema')}}"></textarea>
                        <div class="card-mail flex items-center my-2">
                            <input type="email" id="subscribete" class="border-l border-t border-b border-gray-200 rounded-l-md w-full text-base md:text-lg px-3 py-2" placeholder="{{__('Ingresa tu correo')}}">
                        </div>
                        <span class="text-red-600 font-bold" id="emailOK"></span>
                    </div>
                    <div id="exito" class="p-4 flex space-x-4">
                            <button class="subscripcionbuton-close w-1/2 px-4 py-3 text-center bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-black font-bold rounded-lg text-sm">{{__('Cerrar')}}</button>
                            <a subscrib="suscribcion" languaj="{{app()->getlocale()}}" id="subscribe" class="w-1/2 px-4 py-3 text-center cursor-pointer bg-oranges550 hover:bg-oranges650  hover:bg-oranges650
                            text-white font-bold capitalize rounded-lg">{{__('Suscribirme')}}</a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
