@extends('layouts.app')
@section('meta_language_es', 'https://cursosdev.com/submit/coupon')
@section('meta_language_en', 'https://en.cursosdev.com/submit/coupon')
@section('content')
<style>
    .seccion
{
    text-transform: uppercase;
    -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    transform: rotate(270deg);
    -webkit-transform-origin: 0 0;
    -moz-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    -o-transform-origin: 0 0;
    transform-origin: 0 0;
    top: 60%;
}
</style>
<div class="p-4 md:p-10 bg-white">
    <div class="flex justify-center text-xl font-bold">
        <h1 class="leading-relaxed text-2xl font-bold">Compartir cupones Gratis y/o con descuentos</h1>
    </div>
    <div class="grid col-span-1 md:flex items-center mt-4 justify-center">
        <div class="md:mr-4">
            <img class="" src="{{asset('img/logo.png')}}" alt="">
        </div>
        <div class="md:border-l-2 pl-4 p-2 col-span-2 text-justify md:w-1/2 mt-10 md:mt-0">
            <p>
                {{ __('Publicaremos su curso en todas nuestras cuentas de redes sociales, incluidas Facebook, Twitter, Linkedin, etc. Esperamos que los cupones gratuitos tengan una fecha de vencimiento, es decir, hasta la fecha x / y en lugar de tener un número limitado, es decir, cupones de 500/1000. Esta será una consideración importante antes de que su curso se publique en nuestro sitio web y redes sociales.') }}
            </p>
            <p class="mt-4 font-semibold text-blue-600">
                Espero que todos estén sanos y seguros. Nuestro equipo trabaja duro día y noche para promover sus cursos gratuitos todos los días y necesitan un poco de café para mantenerlos despiertos.
                <form action="https://www.paypal.com/donate" method="post" target="_top">
                    <input type="hidden" name="hosted_button_id" value="E6HVN99DSXHRG" />
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                    <img alt="" border="0" src="https://www.paypal.com/en_PE/i/scr/pixel.gif" width="1" height="1" />
                </form>
            </p>               
        </div>
    </div>
</div>
    <div class="container mx-auto">
        @if (Session::has('ok-crear'))
            <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
                <div slot="avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-check-circle w-5 h-5 mx-2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <div class="text-xl font-normal  max-w-full flex-initial">
                    {{ __('Éxito') }}, {{ __('Datos enviados correctamente..!') }}</div>
                <div class="flex flex-auto flex-row-reverse">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                </div>
            </div>
        @endif
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url({{ asset('img/coupons-cursosdev.com.png') }});width='100%' height='auto'">
                </div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <div class="flex items-center space-x-5">
                        <div
                            class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                            i</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed text-2xl font-bold">
                                Envíe cursos gratuitos de Udemy y otros!</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">*
                                Comparta los enlaces directos del curso Udemy, Eduonix, YouAccel, BitDegree, Simpliv, etc.   (no comparta enlaces de terceros o enlaces de spam)
                            </p>
                        </div>
                    </div>
                        <form method="POST" action="{{ route('submit.coupons_es') }}"
                            class="px-8 pt-6 mb-4 bg-white rounded">
                    @csrf
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="font-bold text-sm mt-3">{{ __('Nombre') }}<span class="text-red-500">*</span></label>
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <input type="text" name="nombre_coupon"
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                    placeholder="Name">
                            </div>
                            {!! $errors->first('nombre_coupon', '<span
                                class="flex items-center font-medium tracking-wide text-red-500 text-sm mt-1 ml-1">:message</span>')
                            !!}
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for=""
                                class="font-bold text-sm mt-3">{{ __('email') }} <span class="text-red-500">*</span></label>
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" width="512"
                                        height="512.002" viewBox="0 0 512 512.002">
                                        <g transform="translate(0 0.002)">
                                            <path
                                                d="M64,257.6,227.9,376a47.72,47.72,0,0,0,56.2,0L448,257.6V96a32,32,0,0,0-32-32H96A32,32,0,0,0,64,96ZM160,160a16,16,0,0,1,16-16H336a16,16,0,0,1,16,16v16a16,16,0,0,1-16,16H176a16,16,0,0,1-16-16Zm0,80a16,16,0,0,1,16-16H336a16,16,0,0,1,16,16v16a16,16,0,0,1-16,16H176a16,16,0,0,1-16-16Z"
                                                opacity="0.4" />
                                            <path
                                                d="M352,160a16,16,0,0,0-16-16H176a16,16,0,0,0-16,16v16a16,16,0,0,0,16,16H336a16,16,0,0,0,16-16Zm-16,64H176a16,16,0,0,0-16,16v16a16,16,0,0,0,16,16H336a16,16,0,0,0,16-16V240A16,16,0,0,0,336,224ZM329.4,41.4C312.6,29.2,279.2-.3,256,0c-23.2-.3-56.6,29.2-73.4,41.4L152,64H360ZM64,129c-23.9,17.7-42.7,31.6-45.6,34A48,48,0,0,0,0,200.7v10.7l64,46.2Zm429.6,34c-2.9-2.3-21.7-16.3-45.6-33.9V257.6l64-46.2V200.7A48,48,0,0,0,493.6,163ZM256,417.1a79.989,79.989,0,0,1-46.888-15.192L0,250.9V464a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V250.9l-209.1,151A80,80,0,0,1,256,417.1Z" />
                                        </g>
                                    </svg>
                                </div>
                                <input type="email" name="email_coupon"
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                    placeholder="email@example.com">
                            </div>
                            {!! $errors->first('email_coupon', '<span
                                class="flex items-center font-medium tracking-wide text-red-500 text-sm mt-1 ml-1">:message</span>')
                            !!}
                        </div>
                    </div>
                    {{-- <div class="flex -mx-3">
                            <div class="w-1/2 px-3 mb-5">
                                <label for="" class="font-bold text-sm mt-3">{{__('Precio')}}</label>
                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                        <svg class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;"
                                            xml:space="preserve">
                                            <path
                                                d="M278.622,224.006V110.243c24.336,4.105,47.283,14.091,66.901,29.087c3.911,2.682,8.5,4.137,13.251,4.201
                                                   c15.222,0,27.633-12.249,27.794-27.471c0.032-6.528-2.521-12.798-7.11-17.452c-28.344-24.272-63.895-38.589-101.159-40.722V19.749
                                                   c0-10.892-8.823-19.715-19.715-19.715c-0.226-0.032-0.453-0.032-0.679-0.032c-11.053-0.162-20.167,8.662-20.329,19.747v36.844
                                                   c-72.718,5.171-122.166,50.095-122.166,109.885c0,73.364,62.376,93.726,122.166,109.885V405.64
                                                   c-31.544-4.234-61.277-17.323-85.646-37.813c-4.589-3.652-10.278-5.688-16.16-5.817c-14.899,1.034-26.372,13.509-26.179,28.441
                                                   c-0.032,6.528,2.521,12.798,7.11,17.452c33.386,30.057,76.306,47.348,121.197,48.802v35.551c0,0.226,0.032,0.453,0.032,0.679
                                                   c0.517,11.053,9.922,19.585,20.975,19.036c10.892,0,19.715-8.823,19.715-19.715v-36.197
                                                   c88.231-5.817,123.782-59.467,123.782-116.349C402.404,263.436,338.413,240.166,278.622,224.006z M237.9,213.664
                                                   c-35.228-10.342-62.699-21.007-62.699-51.064s24.886-51.711,62.699-54.619V213.664z M278.622,406.286V288.645
                                                   c36.521,10.342,64.961,24.239,64.638,58.174C343.26,371.382,326.454,400.469,278.622,406.286z" />
                                        </svg>
                                    </div>
                                    <input type="text" name="price_coupon" value="0.00"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        placeholder="0.00">
                                </div>
                            </div>
                            <div class="w-1/2 px-3 mb-5">
                                <label for="" class="font-bold text-sm mt-3">{{__('Cupón Expira en:')}}</label>
                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input type="date" name="finOfert_coupon"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        placeholder="25/02/2020">
                                </div>
                            </div>
                        </div> --}}
                    {{-- <div class="flex -mx-3">
                            <div class="w-1/2 px-3 mb-5">
                                <label for="" class="font-bold text-sm mt-3">{{__('Cupon')}}</label>
                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">

                                    </div>
                                    <input type="text" name="coupon_"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        placeholder="CUPONGRATIS">
                                </div>
                            </div>
                            <div class="w-1/2 px-3 mb-5">
                                <label for="" class="font-bold text-sm mt-3">{{__('¿Cuántos cupones gratis hay?')}}</label>
                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">

                                    </div>
                                    <input type="text" name="cant_coupon"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        placeholder="500/1000">
                                </div>
                            </div>
                        </div> --}}
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-2">
                            <label for="" class="font-bold text-sm mt-3">Ejemplos de códigos de cupón: CURSOSDEV.COM o CURSOSDEV.COM1 así sucesivamente (opcional) <span class="text-red-500">*</span></label>
                            <P>Si tiene varios cursos, agregue todos los cursos en la descripción. No es necesario llenar varios formularios</P>
                            <div class="flex">
                                <textarea id="mensage" name="message_coupon"
                                    class="appearance-none w-full  p-2 h-60 focus:outline-none rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"></textarea>
                            </div>
                            {!! $errors->first('message_coupon', '<span class="flex items-center font-medium tracking-wide text-red-500 text-sm mt-1 ml-1">:message</span>')
                            !!}
                        </div>
                    </div>
                    <hr class="mb-2 border-t" />
                    <div class="mb-2 text-center">
                        <button
                            class="w-full bg-indigo-600 hover:bg-blue-dark text-white font-bold py-2 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300"
                            type="submit">
                            Enviar
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
