
@extends('layouts.app')
@section('meta_title', '🔥 Cupón Gratis: ' . $cursosdetalle->titulo . ' | Con 100% de descuento - CursosDev ' . date('M,
    Y'))
@section('meta_description', $cursosdetalle->descripcion_corta)
@section('meta_keyword',
    'Cupones para Udemy & Cursos Online Gratis,codigos de promocion 100% OFF, cupones gratis,cursos
    gratis,cursos udemy gratis,descargar cursos de udemy gratis,cursos udemy mega,download courses udemy for Mega',)
@section('meta_url', route('coupons-udemy.show_es', ['rutacoupons' => $cursosdetalle->ruta]))
@section('meta_image', $cursosdetalle->portada)
@section('meta_language_es', 'https://cursosdev.com/coupons')
@section('meta_language_en', 'https://en.cursosdev.com/coupons')
@section('content')


<div key={item.id} class="flex justify-between container mx-auto">
    <div class="w-full lg:w-8/12">
        <div class="text-center my-4">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block"
                data-ad-client="ca-pub-7164053958255490" data-ad-slot="2907193773" data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <div class="pb-12 md:pb-12">
            <article class="max-w-sm mx-auto md:max-w-none grid md:grid-cols-2 gap-6 md:gap-8 lg:gap-12 xl:gap-16 items-center">
                    <a href="blog-post" class="relative block group" data-aos="fade-right" data-aos-delay="200">
                        <div class="rounded absolute inset-0 bg-gradient-to-r from-green-400 to-blue-500 hidden md:block transform md:translate-y-2 md:translate-x-4 xl:translate-y-4 xl:translate-x-8 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out pointer-events-none" aria-hidden="true"></div>
                        <img class="rounded w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out" src="{{asset($cursosdetalle->portada)}}" alt="portada detalles curso" />
                        <div class="absolute top-0 right-0 mt-4 mr-4">
                        <div class="inline-flex items-center text-xs font-medium text-white bg-gray-700 bg-opacity-60 rounded-full text-center px-2 py-0.5">
                            <svg class="w-3 h-3 shrink-0 fill-current text-colorstart mr-1" viewBox="0 0 12 12">
                            <path d="M11.953 4.29a.5.5 0 00-.454-.292H6.14L6.984.62A.5.5 0 006.12.173l-6 7a.5.5 0 00.379.825h5.359l-.844 3.38a.5.5 0 00.864.445l6-7a.5.5 0 00.075-.534z" />
                            </svg>
                            <span>{{$cursosdetalle->idioma}}</span>
                        </div>
                        </div>
                </a>
                <div data-aos="fade-left" data-aos-delay="200">
                    <header>
                        <h3 class="h3 text-2xl lg:text-3xl mb-2">
                            <a href="/blog-post" class="hover:text-gray-500 text-gray-700 font-bold transition duration-150 ease-in-out">{{$cursosdetalle->titulo}}</a>
                        </h3>
                    </header>
                    @php
                        $rating = round($cursosdetalle->calificacion,1);
                        $calificacion = ($rating*100)/5;
                    @endphp
                    <p class="text-lg text-gray-500 grow">{{$cursosdetalle->descripcion_corta}}</p>
                    <div class="mt-2 flex flex-wrap items-center justify-between text-sm text-amber-500">
                        <div class="flex items-center space-x-2">
                            <span class="inline-block text-white bg-rating font-bold text-sm py-0 px-1 rounded">{{round($cursosdetalle->calificacion,1)}}</span>
                            <div class="relative inline-flex text-colorstart">
                                <div class="absolute top-0 left-0 whitespace-no-wrap overflow-hidden w-0" style="width:{{$calificacion}}%">
                                    <div class="inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                                            class="w-5 h-5">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                                            class="w-5 h-5">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                                            class="w-5 h-5">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                                            class="w-5 h-5">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                                            class="w-5 h-5">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="w-5 h-5">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="w-5 h-5">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="w-5 h-5">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="w-5 h-5">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="w-5 h-5">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <span class="inline-block text-gray-500 font-bold text-sm py-0 px-1">{{$cursosdetalle->cant_estudiantes}}</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="inline-flex text-sm font-medium text-red-600 uppercase font-bold rounded-full text-center px-2 py-0.5">
                            @if ($cursosdetalle->precio_oferta == 0)
                                <span>GRATIS</span>
                                @else
                                ${{$cursosdetalle->precio_oferta}}
                        @endif
                        </div>
                            <div class="inline-flex text-sm font-medium text-slate-500 line-through">${{$cursosdetalle->precio}}</div>
                        </div>
                    </div>
                    <footer class="mt-2 flex flex-wrap items-center justify-between">
                        <div class="flex items-center space-x-2">
                        <a href="#">
                            <img class="rounded-full shrink-0 mr-4" src="{{ asset('img/plantilla/logoudemy.png') }}" width="40" height="40" alt="Author 04" />
                        </a>
                            <a href="#" class="font-medium text-gray-500 hover:text-gray-400 transition duration-150 ease-in-out">{{$cursosdetalle->instructor}}</a>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-wrap items-center justify-between">
                                <svg width="24" height="24" viewBox="0 0 24 24"
                                version="1.1" xmlns:xa="http://www.w3.org/1999/xa"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 10C0 4.47715 4.47715 0 10 0C12.6522 0 15.1957 1.05357 17.0711 2.92893C18.9464 4.8043 20 7.34784 20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10ZM10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10C18 12.1217 17.1571 14.1566 15.6569 15.6569C14.1566 17.1571 12.1217 18 10 18ZM10.88 4.5L10.88 9.64L14.51 13.27C14.7018 13.4678 14.7018 13.7822 14.51 13.98L13.98 14.51C13.7822 14.7018 13.4678 14.7018 13.27 14.51L9.27 10.51C9.17837 10.4159 9.12492 10.2912 9.12 10.16L9.12 4.5C9.12 4.22386 9.34386 4 9.62 4L10.38 4C10.6561 4 10.88 4.22386 10.88 4.5Z"
                                    fill-rule="evenodd" stroke="none"></path>
                            </svg>
                            </div>
                            <span class="mb-2 text-xs text-gray-600 font-bold">{{ __(\Carbon\Carbon::parse($cursosdetalle->fecha)->diffForHumans()) }}</span>
                        </div>
                     
                    </footer>
                    <div class="flex space-x-2 items-center justify-end">
                        @php
                            $fechaActual = date('Y-m-d H:i:s');
                        @endphp
                        @if ($cursosdetalle->finOferta > $fechaActual)
                            <div id="clockdiv" date="{{ $cursosdetalle->finOferta }}">
                                <div><span class="text-black days"></span>
                                    <div class="text-black smalltext">Dias</div>
                                </div>
                                <div><span class="text-black hours"></span>
                                    <div class="text-black smalltext">Horas</div>
                                </div>
                                <div><span class="text-black minutes"></span>
                                    <div class="text-black smalltext">Min</div>
                                </div>
                                <div><span class="text-black seconds"></span>
                                    <div class="text-black smalltext">Seg</div>
                                </div>
                            </div>
                        @else
                            <div class="text-center">
                                <h4>{{ __('Cup��n Expirado') }}</h4>
                            </div>
                        @endif
                    </div>
                </div>
            </article>
        </div>

        <div class="">
            <div class=" max-w-5xl px-10 py-2 bg-white rounded-lg shadow-md">
                <div class="mx-auto flex flex-wrap">

                    <div class="flex justify-between items-center mt-2">
                                @foreach ($categorias as $itemcateg)
                                    @if ($itemcateg->id == $cursosdetalle->categories_id)
                                    <a href="/courses/{{$itemcateg->ruta}}/1" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">{{$itemcateg->categoria}}</a> 
                                    @endif
                                    
                                @endforeach
                                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                                </svg>
                                @foreach ($subcategorias as $itemSubcateg)
                                    @if ($itemSubcateg->id  == $cursosdetalle->subcategories_id)
                                    <a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">{{$itemSubcateg->subcategoria}}</a>
                                    @endif
                                @endforeach
                        </div>
                    <section class="bg-coolGray-100 mx-auto item-center text-coolGray-900 w-full">
                        <div class="mx-auto flex flex-col justify-around p-4 text-center md:p-6 lg:flex-row">
                            <div class="flex flex-col justify-center lg:text-left">
                                <p class="py-2 text-2xl font-medium leading-tight title-font">Comparte si te a gustado: </p>
                            </div>
                            <div class="flex flex-col items-center justify-center flex-shrink-0 mt-2 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 lg:ml-4 lg:mt-0 lg:justify-end">
                                <a id="share-fb" class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-500 hover:bg-blue-600 shadow-md text-white">
                                    <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                    <span class="flex flex-col items-start ml-4 leading-none">
                                        <span class="font-semibold title-font">Facebook</span>
                                    </span>
                                </a>
                                <a id="share-twitter" class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-400 hover:bg-blue-500 shadow-md text-white">
                                    <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                    <span class="flex flex-col items-start ml-4 leading-none">
                                        <span class="font-semibold title-font">Twitter</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </section>
 
                    <div class="mt-2">
                        <a href="/cursos-gratis" class="text-4xl text-gray-700 font-bold hover:underline">{{$cursosdetalle->titulo}}</a>
                        <div class="flex mt-6 justify-center">
                            <div class="w-16 h-1 rounded-full bg-gray-300 inline-flex"></div>
                        </div>
                        <p href="#" class="text-sm pb-4">Publicado
                            <a href="#" class="font-semibold hover:text-gray-800"></a>en
                            {{ \Carbon\Carbon::parse($cursosdetalle->fecha)->format('d M Y') }}
                        </p>
                        <div class="text-center my-4">
                            {!! $ads[0]['ads_code'] !!}
                        </div>
                        <div class="mt-2 text-gray-600">
                            {!! $cursosdetalle->descripcion !!}
                        </div>
                        <div class="text-center my-4">
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490"
                                crossorigin="anonymous"></script>
                            <!-- coupons_final -->
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7164053958255490"
                                data-ad-slot="5132640087" data-ad-format="auto"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
                    <p class="text-center text-lg text-gray-700 mt-2 px-6">Debes tener en cuenta que los
                        cupones duran maximo 4 dias o hasta agotar 1000 inscripciones,pero puede vencer
                        en cualquier momento. Obten el curso con cupon haciendo clic en el siguiente
                        boton: </p>
                    <div class="p-2">
                        <div class="flex-wrap items-center bg-white leading-none text-purple-600 rounded-full my-2 p-2 shadow text-teal text-md">
                            <span class="mb-4 px-2">(Cup&oacuten v&aacutelido para las primeras
                                1000 inscripciones): </span>
                            <span class="px-2 mx-2 sm:text-sm md:text-md lg:text-lg text-red-600 uppercase font-bold">{{ $cursosdetalle->cupon }}</span>
                        </div>
                    </div>
                    <!-- coupons_final -->

                    <div class="my-2">
                        <div class="grid gap-6 md:grid-cols-2">
                            <div class="flex content-center">
                                    @if ($cursosdetalle->plataforma === 'Udemy')
                                    <a href="{{ 'https://click.linksynergy.com/deeplink?id=sIt9MIeGnaM&mid=47900&murl=https%3A%2F%2Fwww.udemy.com%2Fcourse%2F' . $cursosdetalle->ruta . '/?couponCode=' . $cursosdetalle->cupon }}"
                                        rel="nofollow" target="_blank" class="border border-purple-800 bg-indigo-900 hover:bg-indigo-500 my-8 mr-2 text-white block rounded-sm font-bold py-4 px-6 ml-2 flex text-center items-center">Obtener Cupón</a>
                                @endif
                                @if ($cursosdetalle->plataforma === 'Itoo')
                                    <a href="{{ config('services.cred_affiliate_itoo.url') .$cursosdetalle->ruta .config('services.cred_affiliate_itoo.offert_id') .config('services.cred_affiliate_itoo.cod_affiliate') .'&coupon_code=' .$cursosdetalle->cupon }}"
                                        rel="nofollow" target="_blank"
                                        class="border border-purple-800 bg-indigo-900 hover:bg-indigo-500 my-8 mr-2 text-white block rounded-sm font-bold py-4 px-6 ml-2 flex text-center items-center">Obtener
                                        Cupon</a>
                                @endif


                                <a href="/coupons"
                                    class="border border-purple-800 text-bg-blue-850  block my-8 rounded-sm font-bold py-4 px-6 flex text-center items-center hover:bg-indigo-500 hover:text-white">
                                    Mas Cursos
                                    <svg class="h-5 w-5 ml-2 fill-current" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        x="0px" y="0px" viewBox="-49 141 512 512"
                                    >
                                        <path id="XMLID_11_"
                                            d="M-24,422h401.645l-72.822,72.822c-9.763,9.763-9.763,25.592,0,35.355c9.763,9.764,25.593,9.762,35.355,0
                                                        l115.5-115.5C460.366,409.989,463,403.63,463,397s-2.634-12.989-7.322-17.678l-115.5-115.5c-9.763-9.762-25.593-9.763-35.355,0
                                                        c-9.763,9.763-9.763,25.592,0,35.355l72.822,72.822H-24c-13.808,0-25,11.193-25,25S-37.808,422-24,422z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-4">{!! $ads[0]['ads_code'] !!}</div>
                    <div class="mx-4 flex justify-between items-center px-3 my-2 mb-4 "><span class="font-semibold text-gray-600 text-sm">Tags:</span>
                        <ul class="inline-block list-none text-sm text-white font-semibold">
                            @foreach ($cursosdetalle->tags as $tag)
                                <li class="inline-block bg-blue-500 px-2 rounded-full">#{{ $tag->name }}</li>
                            @endforeach
                        </ul>
                    </div>
            
                <div class="mx-4 flex justify-between items-center">

                    <div class="flex"><a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd"
                            class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black"><svg
                                class="inline fill-current" version="1.1" id="Capa_1" width="24" height="24"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xa="http://www.w3.org/1999/xa"
                                x="0px" y="0px" viewBox="0 0 511.992 511.992"
                                style="enable-background:new 0 0 511.992 511.992;" xml:space="preserve">
                                <path
                                    d="M510.096,249.937c-4.032-5.867-100.928-143.275-254.101-143.275C124.56,106.662,7.44,243.281,2.512,249.105 c-3.349,3.968-3.349,9.792,0,13.781C7.44,268.71,124.56,405.329,255.995,405.329S504.549,268.71,509.477,262.886 C512.571,259.217,512.848,253.905,510.096,249.937z M255.995,383.996c-105.365,0-205.547-100.48-230.997-128 c25.408-27.541,125.483-128,230.997-128c123.285,0,210.304,100.331,231.552,127.424 C463.013,282.065,362.256,383.996,255.995,383.996z" />
                                <path
                                    d="M255.995,170.662c-47.061,0-85.333,38.272-85.333,85.333s38.272,85.333,85.333,85.333s85.333-38.272,85.333-85.333 S303.056,170.662,255.995,170.662z M255.995,319.996c-35.285,0-64-28.715-64-64s28.715-64,64-64s64,28.715,64,64 S291.28,319.996,255.995,319.996z" />
                            </svg>{{ $cursosdetalle->visitas }}<span
                                class="hidden md:inline">&nbsp;{{ __('Visualizaciones') }}</span></a><a
                            href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd#comments"
                            class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black"><svg
                                class="inline fill-current" width="24" height="24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5 5h3a6 6 0 110 12v2.625c-3.75-1.5-9-3.75-9-8.625a6 6 0 016-6zM12 15.5h1.5a4.501 4.501 0 001.722-8.657A4.5 4.5 0 0013.5 6.5h-3A4.5 4.5 0 006 11c0 2.707 1.846 4.475 6 6.36V15.5z">
                                </path>
                            </svg>{{ count($comments) }}<span class="hidden md:inline">&nbsp;{{ __('comentarios') }}</span></a>
                            <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd#comments"
                            class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                            <svg
                                class="inline fill-current" width="18" height="18"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M5.08 12.16A2.99 2.99 0 0 1 0 10a3 3 0 0 1 5.08-2.16l8.94-4.47a3 3 0 1 1 .9 1.79L5.98 9.63a3.03 3.03 0 0 1 0 .74l8.94 4.47A2.99 2.99 0 0 1 20 17a3 3 0 1 1-5.98-.37l-8.94-4.47z"></path> </svg> <span class="hidden md:inline">&nbsp;{{ __('Compartir:') }}:</span></a>
                        <div
                            class="flex flex-col items-center justify-center flex-shrink-0 mt-2 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 lg:ml-4 lg:mt-0 lg:justify-end">
                            <button id="share-fb2"
                                class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-500 hover:bg-blue-600 shadow-md text-white"><svg
                                    class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg><span class="flex flex-col items-start ml-4 leading-none"><span
                                        class="font-semibold title-font">Facebook</span></span></a>
                                        
                            <button
                                    id="share-twitter2"
                                    class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-400 hover:bg-blue-500 shadow-md text-white"><svg
                                        class="w-5 h-5 fill-current" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg><span class="flex flex-col items-start ml-4 leading-none"><span
                                            class="font-semibold title-font">Twitter</span></span></a>
                        </div>
                    </div>
                </div>

                    <section class="mt-4 text-gray-600 body-font mb-4">
                        <div class="container px-5 py-auto mx-auto">
                            <div class="flex flex-col">
                                <div class="flex flex-wrap w-full mb-4 flex-col items-center text-center">
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                                        Articulos Relacionados</h1>
                                </div>
                            </div>
                            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                                @foreach ($cursosrelacionados as $items)
                                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                                    <div class="rounded-lg h-64 overflow-hidden">
                                        <img alt="content" class="object-cover object-center h-full w-full" src="{{asset($items->portada)}}" /> 
                                    </div>
                                    <h2 class="text-xl font-medium title-font text-gray-900 mt-5">{{$items->titulo}}</h2>
                                    <p class="text-base leading-relaxed mt-2">{{$items->descripcion_corta}}</p>
                                    <a href="{{ route('coupons-udemy.show_es', ['rutacoupons' => $items->ruta]) }}" class="text-indigo-500 inline-flex items-center mt-3">Ir al Curso
                                        <svg fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                                            strokeWidth="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                                @endForEach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div >

    <div class="-mx-8 w-full xl:w-4/12 hidden lg:block">
        <div class="px-8">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490"
                crossorigin="anonymous"></script>
            <!-- coupons_mid --><ins class="adsbygoogle" style="display:block"
                data-ad-client="ca-pub-7164053958255490" data-ad-slot="5253705807" data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <h1 class="mb-4 text-xl font-bold text-gray-700">CURSOS DESTACADOS</h1>
            <div class="flex flex-col bg-white max-w-lg px-6 py-4 mx-auto rounded-lg shadow-md">
                @foreach ($cursosdestacados as $item)
                        <a href={{ route('coupons-udemy.show_es', ['rutacoupons' => $item->ruta]) }}>
                            <div class="rounded w-full flex flex-col md:flex-row mb-10">
                                <img src="{{$item->portada}}"
                                    class="rounded-md h-32 sm:h-56 md:h-32 md:m-0 lg:h-16 m-4" />
                                <div class="bg-white rounded px-4">
                                    <div class="text-gray-800 font-semibold text-sm mb-2 md:mt-4 lg:mt-0">
                                        {{$item->titulo}}  
                                    </div>

                                </div>
                            </div>
                        </a>
                @endForEach
            </div>
        </div>
    </div>
</div >
@include('newsletter.subscribe')
@include('newsletter.expired') @endsection
