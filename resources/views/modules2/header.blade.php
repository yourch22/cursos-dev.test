<div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
    <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-gradient-to-br from-indigo-900 to-green-900 border-none">
        <a href="{{route('coupons.discount_es')}}"><img class="w-7 h-7 mr-2 rounded-md overflow-hidden"
            src="{{ asset('img/plantilla/icono.png') }}" />
        </a>
        <span class="hidden md:block">CURSOSDEV</span>
    </div>
    <div class="flex justify-between items-center h-14 bg-gradient-to-br from-indigo-900 to-green-900 header-right">
        <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
            <button type="submit" class="outline-none focus:outline-none buscar_descuentos">
                <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
            <input type="search" id="search_discount" placeholder="¿ Qué quieres aprender hoy ?"
                class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent buscador_descuentos"/>
        </div>
        <ul class="flex items-center">
            <li class="hidden sm:hidden md:hidden lg:block xl:block">
                <a href="{{route('articles.index_es')}}" class="flex items-center mr-4 hover:text-blue-100">
                    <span class="inline-flex mr-1">
                        <i class="fa fa-wallet fa-fw mr-1"></i>
                    </span>
                    Blog
                </a>
            </li>
            <li class="hidden sm:hidden md:hidden lg:block xl:block">
                <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
            </li>
            <li class="hidden sm:hidden md:hidden lg:block xl:block">
                <a href="{{route('submit.coupon_es')}}" class="flex items-center mr-4 hover:text-blue-100">
                    <span class="inline-flex mr-1">
                        <i class="fab fa-free-code-camp fa-fw mr-1"></i>
                    </span>
                    Enviar Cupon
                </a>
            </li>
        </ul>
    </div>
</div>