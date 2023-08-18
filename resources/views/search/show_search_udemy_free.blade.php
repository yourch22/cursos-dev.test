@extends('layouts.app')
@section('meta_title','Cursos online - en cualquier momento y en cualquier lugar')
@section('meta_description','Somos una marca afiliada a Udemy, principal destino del mundo para cursos en línea. Descubre un curso en línea y empieza ya a aprender una nueva habilidad.')
@section('meta_keyword','cursos online, cursos gratis,cupones gratis, desarrollo, negocios, it y software, productividad, desarrollo personal, diseño, marketing, música, salud y fitness, fotografía, estilo de vida, idiomas')
@section('meta_language_es', route('search_es',['search'=>$busqueda,'page'=>1]))
@section('meta_language_es', 'https://cursosdev.com/')
@section('meta_language_en', 'https://en.cursosdev.com/')
@section('content')
<center>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490"
     crossorigin="anonymous"></script>
<!-- Ads_Horizontal -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7164053958255490"
     data-ad-slot="2907193773"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>
<div>
    <div class="h-48 max-h-full sm:max-h-screen md:max-h-full lg:max-h-screen xl:max-h-full flex justify-center items-center bg-cover bg-center"
        style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://www.itmastersmag.com/wp-content/uploads/2021/01/shutterstock_1078387013-2048x1024.jpg')">
        <div class="space-y-5">
            <p class="text-white font-semibold text-3xl flex flex-col items-center">Repositorio gratuito de todos los cursos de Udemy</p>
            <div class="flex flex-row items-center justify-center">
                <input type="search" name="serch_free" id="languaje" idioma="{{ app()->getLocale() }}"
                placeholder="¿Qué buscaremos hoy?" class="p-4 focus:outline-none focus:ring-1 focus:ring-blue-300 w-3/4 buscador_free"/>
                <button type="submit" class="p-4 text-l font-semibold bg-red-500 hover:bg-red-700 text-white buscar_free">Buscar</button>
            </div>
        </div>
    </div>
  </div>
<div class="w-full mt-8 mb-6 mx-auto px-4 flex items-center justify-between">
  <span class="text-2xl">
    Los mejores cursos de
    <strong class="text-2xl">{{ $busqueda }}</strong>
  </span>
</div>
<div class="w-screen sm:w-full md:full lg:w-full xl:w-full mx-auto grid grid-cols-1 px-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mb-10">
  @foreach ($searchcursosfree->results as $key => $item)
  @if ($key == 0)
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article"
      data-ad-format="fluid" data-ad-client="ca-pub-7164053958255490" data-ad-slot="3040067470"></ins>
  <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  @endif
  @if ($key == 9)
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- adsCouponsindex -->
  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7164053958255490"
      data-ad-slot="5457335495" data-ad-format="auto" data-full-width-responsive="true"></ins>
  <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  @endif
  @if ($key == 18)
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- adsCouponsindex -->
  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7164053958255490"
      data-ad-slot="5457335495" data-ad-format="auto" data-full-width-responsive="true"></ins>
  <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  @endif
  <div class="">
    <a href="{{ route('udemy_free_courses_es',['id_courses'=>$item->id,'rutafree'=>$item->published_title]) }}" target="_blank" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
      <div class="relative pb-48 overflow-hidden">
        <img loading="lazy" class="absolute inset-0 h-full w-full object-cover"
          src="{{$item->image_240x135}}" alt="">
          <div class="text-sm absolute top-0 right-0 bg-red-500 px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                    <span class="font-bold">Gratis</span>
          </div>
      </div>

      <div class="p-4">
        <h2 class="mt-2 mb-2  font-bold">{{ $item->title }}</h2>
        <p class="text-sm">Creado por: <i>{{$item->visible_instructors[0]->display_name}}</i></p>
        <div class="mt-2 flex items-center text-sm text-gray-600">
          <span class="inline-block text-white bg-rating font-bold text-sm py-0 px-1 rounded">{{round($item->avg_rating, 1)}}</span>
          @php
            $rating = round($item->avg_rating, 1);
            $calificacion= $rating*100/5;
          @endphp
          <div class="relative inline-flex text-colorstart">
            <div class="absolute top-0 left-0 whitespace-no-wrap overflow-hidden w-0" style="width:{{$calificacion}}%">
              <div class="inline-flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                  class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                  class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                  class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                  class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                  class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
              </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="p-4 border-t border-b">
        <div class="grid grid-cols-2">
            <div class="col-span-2 text-center">
              <button href="{{ route('udemy_free_courses_es',['id_courses'=>$item->id,'rutafree'=>$item->published_title]) }}" target="_blank" class="bg-blue850 text-sm hover:bg-blue750 text-white font-bold py-2 px-6 rounded-full inline-flex items-center">
                <span>Ver información del curso</span>
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
              </button>
          </div>
        </div>
      </div>
    </a>
  </div>

  @endforeach
</div>
@php
$totalpaginas= ceil($searchcursosfree->count/20);
@endphp
<div class="container mx-auto items-center content-center text-center">
    <div class="bg-white py-5 content-center justify-between border-t border-gray-200">
        <nav id="uk-pagination" class="relative z-0 content-center inline shadow-sm" url="{{url('/')}}/search-udemy-free/{{$busqueda}}"
             tipo="search" pagina="{{ $page }}"
            totalpage="{{ $totalpaginas }}" cat="">
        </nav>
    </div>
</div>
@include('newsletter.subscribe')
@endsection