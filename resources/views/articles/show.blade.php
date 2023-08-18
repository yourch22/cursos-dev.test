@extends('layouts.app')
@section('meta_title',$articulosdetalle->titulo.' '.date('M , Y'))
@section('meta_description',$articulosdetalle->descripcion)
@section('meta_keyword',$articulosdetalle->palabras_claves)
@section('meta_url',route('articles.show_es',['ruta'=>$articulosdetalle->ruta]))
@section('meta_image',asset('/').$articulosdetalle->portada)
@section('meta_language_es', 'https://cursosdev.com/blog')
@section('meta_language_en', 'https://en.cursosdev.com/blog')
@section('content')
<!-- component -->
<div class="max-w-screen-xl mx-auto">
    <main class="mt-10">
      <div class="mb-4 md:mb-0 w-full mx-auto relative">
        <div class="mb-4 md:mb-0 w-full max-w-screen mx-auto relative" style="height: 24em;">
            <div class="absolute left-0 bottom-0 w-full h-full z-10"
                style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                <img loading="lazy" src="{{asset('/')}}{{$articulosdetalle->portada}}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
                <a href="#"
                    class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{$articuloscategory->categoria}}</a>
                <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                    {{$articulosdetalle->titulo}}
                </h2>
                <div class="flex mt-3">
                    <img loading="lazy" src="{{asset('img/plantilla/perfil-cursos-de-programacion.png')}}"
                        class="h-10 w-10 rounded-full mr-2 object-cover" />
                    <div>
                        <p class="font-semibold text-gray-200 text-sm"> Cursosdev </p>
                        <p class="font-semibold text-gray-400 text-xs"> {{ \Carbon\Carbon::parse($articulosdetalle->fecha)->format('d M') }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="flex flex-col lg:flex-row lg:space-x-12">
        <div class="px-4 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
            <p class="border-b py-0 mb-3"></p>
          {!! $articulosdetalle->contenido !!}
            <div class="px-3 mb-4">
                <span class="font-semibold text-gray-600 text-sm">Tags:</span>
                <ul class="inline-block list-none text-sm text-white font-semibold">
                    <li class="inline-block bg-pink-500 px-2 rounded-full">#Udemy</li>
                </ul>
            </div>
            
            {{-- <header class="p-3 flex items-center">
                <img src="{{ asset('img/plantilla/perfil-cursos-de-programacion.png') }}" height="64"
                    width="64" alt="Czebou's avatar" class="rounded-full mr-2" />
                <div>
                    <p class="w-full text-gray-800"><strong>Cursos de Programacion</strong> <small
                            class="text-light text-gray-600"> 26 minutes ago</small></p>
                    <p class="w-full text-gray-600 text-xs">@CursosyCuponesparaUdemy</p>
                </div>
            </header> --}}
            <div class="flex justify-between items-center">
                <div class="flex">
                    <a href="#"
                        class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                        <svg class="inline fill-current" version="1.1" id="Capa_1" width="24" height="24"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" viewBox="0 0 511.992 511.992" style="enable-background:new 0 0 511.992 511.992;"
                        xml:space="preserve">
                        <path
                            d="M510.096,249.937c-4.032-5.867-100.928-143.275-254.101-143.275C124.56,106.662,7.44,243.281,2.512,249.105
                                                                c-3.349,3.968-3.349,9.792,0,13.781C7.44,268.71,124.56,405.329,255.995,405.329S504.549,268.71,509.477,262.886
                                                                C512.571,259.217,512.848,253.905,510.096,249.937z M255.995,383.996c-105.365,0-205.547-100.48-230.997-128
                                                                c25.408-27.541,125.483-128,230.997-128c123.285,0,210.304,100.331,231.552,127.424
                                                                C463.013,282.065,362.256,383.996,255.995,383.996z" />
                        <path d="M255.995,170.662c-47.061,0-85.333,38.272-85.333,85.333s38.272,85.333,85.333,85.333s85.333-38.272,85.333-85.333
                                                                S303.056,170.662,255.995,170.662z M255.995,319.996c-35.285,0-64-28.715-64-64s28.715-64,64-64s64,28.715,64,64
                                                                S291.28,319.996,255.995,319.996z" />
                        </svg>{{ $articulosdetalle->visitas }}<span class="hidden md:inline">&nbsp;Visualizaciones</span>
                    </a>
                    <a href="#"
                        class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                        <svg class="inline fill-current" width="24" height="24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.5 5h3a6 6 0 110 12v2.625c-3.75-1.5-9-3.75-9-8.625a6 6 0 016-6zM12 15.5h1.5a4.501 4.501 0 001.722-8.657A4.5 4.5 0 0013.5 6.5h-3A4.5 4.5 0 006 11c0 2.707 1.846 4.475 6 6.36V15.5z">
                            </path>
                        </svg>{{count($comments_article)}}<span class="hidden md:inline">&nbsp;comments</span>
                    </a>
                    <a href="#"
                        class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                        <svg class="inline fill-current" width="18" height="18"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M5.08 12.16A2.99 2.99 0 0 1 0 10a3 3 0 0 1 5.08-2.16l8.94-4.47a3 3 0 1 1 .9 1.79L5.98 9.63a3.03 3.03 0 0 1 0 .74l8.94 4.47A2.99 2.99 0 0 1 20 17a3 3 0 1 1-5.98-.37l-8.94-4.47z" />
                        </svg>
                        <span class="hidden md:inline">&nbsp;Compartir:</span>
                    </a>
                    <a href="" class="py-1 pl-1 pr-2">
                        <div class="share-buttons-row -mt-2 mx-auto">
                            {{-- <h2 class="text-left mr-3">Compartir:</h2> --}}
                            <div class="share-fb"></div>
                            <div class="share-twitter"></div>
                        </div>
                    </a>
                </div>
            </div>
            @foreach ($comments_article as $item)
                <div class="flex items-start w-full py-6">
                    <img loading="lazy" class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                        src="{{asset('img/plantilla/default.jpg')}}" alt="avatar">
                    <div class="">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-semibold text-gray-900 -mt-1">{{$item->nombre}} 
                            <small class="text-sm text-gray-400 ml-2">{{ \Carbon\Carbon::parse($item->fecha_comentario)->format('M d') }}</small> </h2>
                            {{-- <small class="text-sm text-gray-700 text-right">{{ \Carbon\Carbon::parse($item->fecha_comentario)->diffForHumans() }}</small> --}}
                        </div>
                        <p class="mt-3 text-gray-700 text-sm">
                            {{$item->comentario}}
                        </p>
                        @if ($item->respuesta!==null)
                            <div class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto py-6 w-full">
                                <div class="flex items-start px-4 py-6">
                                    <img loading="lazy" class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                                        src="{{asset('img/plantilla/default.jpg')}}" alt="avatar">
                                    <div class="">
                                        <div class="flex items-center justify-between">
                                            <h2 class="text-lg font-semibold text-gray-900 -mt-1">Cursosdev<small class="text-sm text-gray-400 ml-2">{{ \Carbon\Carbon::parse($item->fecha_respuesta)->format('M d') }}</small> </h2>
                                        </div>
                                        <p class="mt-3 text-gray-700 text-sm">
                                            {{$item->respuesta}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
            <h2 class="mx-4 pt-3 pb-2 font-bold text-gray-800 text-lg">Agregar un nuevo comentario</h2>
            <div class="bg-white w-full shadow-lg overflow-hidden mb-4">
                <div class="sm:flex sm:items-center mx-4 py-4">
                    <div class="text-center sm:text-left sm:flex-grow">
                            <form method="POST" action="{{ route('comments_es') }}">
                            <div class="mb-4">
                                <div class="-mx-3 md:flex mb-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <input type="hidden" id="comment_token"
                                            value="{{ csrf_token() }}" />
                                        <input type="text" value="{{ old('nombre') }}"
                                            class="w-full py-3 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none"
                                            id="comment_name" placeholder="Nombre*" required />
                                        <span id="error_comment_name"
                                            class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"></span>
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <input type="email" value="{{ old('email') }}"
                                            class="w-full py-3 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none"
                                            id="comment_email" placeholder="email*" required />
                                        <span id="error_comment_email"
                                            class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"></span>
                                    </div>
                                </div>
                                <textarea class="form-textarea border p-2 mt-3 rounded-lg block w-full border-gray-400" id="comentario" rows="3"
                                    placeholder="Comentario*" required>{{ old('email') }}</textarea>
                                <span id="error_comment"
                                    class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1"></span>
                            </div>
                            <div class="text-right">
                                <span id="enviar_comment" class="sm:ml-3 shadow-sm rounded-md">
                                    <button type="button" id="comment" idCurso="" idArticle="{{ $articulosdetalle->id }}"
                                        class="inline-flex items-center px-12 py-2 border border-transparent text-lg leading-5 font-medium rounded-md text-white bg-blue850 hover:bg-indigo-500 transition duration-150 ease-in-out">
                                        Comentar
                                    </button>
                                </span>
                                <h2 id="success_comment" class="text-green-500 text-md font-bold mr-2" style="display: none">Enviado! Su comentario espera moderación.</h2>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
           <div class="mb-4">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCursosDevcom-108575341058236&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                <h5 class="font-bold text-lg uppercase text-gray-700 px-1 mb-2 mt-4"> </h5>
                <div class="border border-dotted my-2"></div>

                <div class="border border-dotted my-2"></div>
                <!--<div class="rounded w-full flex flex-col md:flex-row mb-10">-->
                <!--    <img src="https://img-a.udemycdn.com/course/240x135/980450_7fc0_3.jpg"-->
                <!--        class="rounded-md h-32 sm:h-56 md:h-32 md:m-0 lg:h-16 m-4" />-->
                <!--    <div class="bg-white rounded px-4">-->
                <!--        <div class="text-gray-800 font-semibold text-sm mb-2 md:mt-4 lg:mt-0">-->
                <!--            Excel para negocios y empresas | ACTUALIZADO 2020-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>

      </div>
    </main>
    <!-- main ends here -->
  </div>
@include('newsletter.subscribe')
@endsection
