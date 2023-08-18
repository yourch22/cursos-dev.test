@extends('layouts.app')
@section('meta_title', '⭐ Curso Gratis:'. $courses_free_detalle->title)
@section('meta_description', $courses_free_detalle->headline)
@section('meta_keyword','Cupones para Udemy & Cursos Online Gratis,codigos de promocion 100% OFF, cupones gratis,cursos gratis,cursos udemy gratis,descargar cursos de udemy gratis,cursos udemy mega,download courses udemy for Mega',)
@section('meta_url', route('udemy_free_courses_es', ['id_courses'=>$courses_free_detalle->id,'rutafree' => $courses_free_detalle->published_title]))
@section('meta_image', $courses_free_detalle->image_480x270)
@section('meta_language_es', 'https://cursosdev.com/')
@section('meta_language_en', 'https://en.cursosdev.com/')
@section('content')
    <div class="flex justify-between container mx-auto">
        <div class="w-full lg:w-8/12">
            <div class="text-center my-4">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Ads_Horizontal -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7164053958255490"
                    data-ad-slot="2907193773" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="">
                <div class=" max-w-5xl px-10 py-6 bg-white rounded-lg shadow-md">
                    <div class="mx-auto flex flex-wrap">
                        <img alt="ecommerce"
                            class="lg:w-1/2 max-h-auto object-cover object-center rounded-lg rounded-b-none border border-gray-200"
                            src="{{ $courses_free_detalle->image_480x270 }}">
                        <div class="lg:w-1/2 lg:pl-10 lg:py-3 mt-6 lg:mt-0">
                            <h1 class="text-gray-900 title-font font-medium text-xl font-bold mb-1">
                                {{ $courses_free_detalle->title }}</h1>
                            <div class="flex mb-2">
                                <span class="flex items-center">
                                    <span
                                        class="title-font font-medium uppercase font-bold text-lg text-red-600 pr-2">Gratis</span>
                                    <span
                                        class="title-font font-medium text-lg text-gray-900 line-through">{{ $courses_free_detalle->earnings }}</span>
                                    <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                                        <p class="text-black leading-none"><span>Creado por:
                                            </span>
                                            @foreach ($courses_free_detalle->visible_instructors as $item)
                                                {{ $item->name }}
                                            @endforeach
                                        </p>
                                    </span>
                                </span>
                            </div>
                            <p class="leading-relaxed">{{ $courses_free_detalle->headline }}</p>
                            <div class="flex mt-2 items-center border-b-2 border-gray-200">
                                <div class="flex">
                                    <div class="mt-2 flex items-center text-sm text-gray-600">
                                        <span
                                            class="inline-block text-white bg-yellow-400 font-bold text-sm py-0 px-1 rounded">{{ round($courses_free_detalle->rating, 1) }}</span>
                                        @php
                                            $rating = round($courses_free_detalle->rating, 1);
                                            $calificacion = ($rating * 100) / 5;
                                        @endphp
                                        <div class="relative inline-flex text-yellow-400">
                                            <div class="absolute top-0 left-0 whitespace-no-wrap overflow-hidden w-0"
                                                style="width:{{ $calificacion }}%">
                                                <div class="inline-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24" stroke="none" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24" stroke="none" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24" stroke="none" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24" stroke="none" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24" stroke="none" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        </div>
                                        ({{ $courses_free_detalle->num_reviews }} calificaciones)
                                    </div>
                                    <div class="flex ml-6 items-center">
                                        <div class="mx-auto">
                                            <img width="45" height="45" src="{{ asset('img/plantilla/logoudemy.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-6">
                            <a href="/courses/{{ $courses_free_detalle->primary_category->title_cleaned }}/1"
                                class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">{{ __($courses_free_detalle->primary_category->title) }}</a>
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                            </svg>
                            <a href="/{{ $courses_free_detalle->primary_category->title_cleaned }}/{{ $courses_free_detalle->primary_subcategory->title_cleaned }}/1"
                                class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">{{ __($courses_free_detalle->primary_subcategory->title) }}</a>
                        </div>
                        
                        <section class="bg-coolGray-100 mx-auto item-center text-coolGray-900 w-full">
                            <div class="mx-auto flex flex-col justify-around p-4 text-center md:p-6 lg:flex-row">
                                <div class="flex flex-col justify-center lg:text-left">
                                    <p class="py-2 text-2xl font-medium leading-tight title-font">Comparte si te a gustado: </p>
                                </div>
                                <div class="flex flex-col items-center justify-center flex-shrink-0 mt-2 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 lg:ml-4 lg:mt-0 lg:justify-end">
                                    <button id="share-fb" class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-500 hover:bg-blue-600 shadow-md text-white">
                                        <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                        <span class="flex flex-col items-start ml-4 leading-none">
                                            <span class="font-semibold title-font">Facebook</span>
                                        </span>
                                    </a>
                                    <button id="share-twitter" class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-400 hover:bg-blue-500 shadow-md text-white">
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
                            <a href="/cursos-gratis" class="text-4xl text-gray-700 font-bold hover:underline">{{ $courses_free_detalle->title }}</a>
                            <div class="flex mt-6 justify-center">
                                <div class="w-16 h-1 rounded-full bg-gray-300 inline-flex"></div>
                              </div>
                              <center>{!! $ads[0]['ads_code'] !!}</center>
                                <section class="text-gray-600 body-font">
                                    <div class="container py-2 mx-auto">
                                        <div class="text-left mb-6">
                                            <h1 class="text-gray-900 title-font font-medium text-3xl my-4 font-bold mb-1">Lo que
                                                aprenderás</h1>
                                        </div>
                                        <div class="flex flex-wrap -m-4">
                                            <div class="p-4 w-full">
                                                <nav
                                                    class="flex flex-col sm:items-start sm:text-left text-left items-left -mb-1 space-y-2.5">
                                                    @foreach ($courses_free_detalle->objectives as $item)
                                                        <a class="my-2">
                                                            <span
                                                                class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                                                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="3" class="w-3 h-3"
                                                                    viewBox="0 0 24 24">
                                                                    <path d="M20 6L9 17l-5-5"></path>
                                                                </svg>
                                                            </span>{{ $item }}
                                                        </a>
                                                    @endforeach
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="text-gray-600 body-font">
                                    <div class="container py-2 mx-auto">
                                        <div class="text-left mb-6">
                                            <h1 class="text-gray-900 title-font font-medium text-3xl my-4 font-bold mb-1">Requisitos
                                            </h1>
                                        </div>
                                        <div class="flex flex-wrap -m-4">
                                            <div class="p-4 w-full">
                                                <nav
                                                    class="flex flex-col sm:items-start sm:text-left text-left items-left -mb-1 space-y-2.5">
                                                    @foreach ($courses_free_detalle->requirements_data as $items)
                                                        @foreach ($items as $key => $item1)
                                                            <a class="my-2">
                                                                <span
                                                                    class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="3"
                                                                        class="w-3 h-3" viewBox="0 0 24 24">
                                                                        <path d="M20 6L9 17l-5-5"></path>
                                                                    </svg>
                                                                </span>{{ $item1 }}
                                                            </a>
                                                        @endforeach
                                                    @endforeach</p>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h1 class="text-gray-900 title-font font-medium text-3xl my-4 font-bold mb-6">Descripción</h1>
                                <p class="mt-2 text-gray-600">{!! $courses_free_detalle->description !!}</p>

                                <section class="text-gray-600 body-font">
                                    <div class="container py-2 mx-auto">
                                        <div class="text-left mb-6">
                                            <h1 class="text-gray-900 title-font font-medium text-3xl my-4 font-bold mb-1">¿Para
                                                quién es este curso?
                                            </h1>
                                        </div>
                                        <div class="flex flex-wrap -m-4">
                                            <div class="p-4 w-full">
                                                <nav class="flex flex-col sm:items-start sm:text-left text-left items-left -mb-1 space-y-2.5">
                                                    @foreach ($courses_free_detalle->who_should_attend_data as $items)
                                                        @foreach ($items as $key => $item1)
                                                            <a class="my-2">
                                                                <span
                                                                    class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="3"
                                                                        class="w-3 h-3" viewBox="0 0 24 24">
                                                                        <path d="M20 6L9 17l-5-5"></path>
                                                                    </svg>
                                                                </span>{{ $item1 }}
                                                            </a>
                                                        @endforeach
                                                    @endforeach</p>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                        </div>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490"
                        crossorigin="anonymous"></script>
                        <!-- coupons_final -->
                        <ins class="adsbygoogle"
                                style="display:block"
                                data-ad-client="ca-pub-7164053958255490"
                                data-ad-slot="5132640087"
                                data-ad-format="auto"></ins>
                        <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        <div class="my-2">
                            <div class="grid gap-6 md:grid-cols-2">
                                <div class="flex content-center">
                                    <a href="{{ 'https://click.linksynergy.com/deeplink?id=sIt9MIeGnaM&mid=47900&murl=https%3A%2F%2Fwww.udemy.com%2Fcourse%2F'.$courses_free_detalle->published_title }}" rel="nofollow"
                                        target="_blank"
                                        class="border border-purple-800 bg-blue850 hover:bg-indigo-500 my-8 mr-2 text-white block rounded-sm font-bold py-4 px-6 ml-2 flex text-center items-center">
                                        {{ __('Obtener Cupón') }}
                                    </a>
                                    <a href="/udemy-free"
                                        class="border border-purple-800 text-bg-blue-850  block my-8 rounded-sm font-bold py-4 px-6 flex text-center items-center hover:bg-indigo-500 hover:text-white">
                                        Mas Cursos
                                        <svg class="h-5 w-5 ml-2 fill-current" clasversion="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" viewBox="-49 141 512 512"
                                            style="enable-background:new -49 141 512 512;" xml:space="preserve">
                                            <path id="XMLID_11_"
                                                d="M-24,422h401.645l-72.822,72.822c-9.763,9.763-9.763,25.592,0,35.355c9.763,9.764,25.593,9.762,35.355,0
                                                                    l115.5-115.5C460.366,409.989,463,403.63,463,397s-2.634-12.989-7.322-17.678l-115.5-115.5c-9.763-9.762-25.593-9.763-35.355,0
                                                                    c-9.763,9.763-9.763,25.592,0,35.355l72.822,72.822H-24c-13.808,0-25,11.193-25,25S-37.808,422-24,422z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <center>{!! $ads[0]['ads_code'] !!}</center>
                        <section class="bg-coolGray-100 mx-auto item-center text-coolGray-900">
                            <div class="mx-auto flex flex-col justify-around p-4 text-center md:p-6 lg:flex-row">
                                <div class="flex flex-col justify-center lg:text-left">
                                    <p class="py-2 text-2xl font-medium leading-tight title-font">Comparte si te a gustado: </p>
                                </div>
                                <div class="flex flex-col items-center justify-center flex-shrink-0 mt-2 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 lg:ml-4 lg:mt-0 lg:justify-end">
                                    <button id="share-fb2" class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-500 hover:bg-blue-600 shadow-md text-white">
                                        <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                        <span class="flex flex-col items-start ml-4 leading-none">
                                            <span class="font-semibold title-font">Facebook</span>
                                        </span>
                                    </a>
                                    <button id="share-twitter2" class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-400 hover:bg-blue-500 shadow-md text-white">
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

                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-auto mx-auto">
                                <div class="flex flex-col">
                                    <div class="flex flex-wrap w-full mb-4 flex-col items-center text-center">
                                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                                            {{ __('Articulos Relacionados') }}</h1>
                                    </div>
                                </div>
                                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                                    @foreach ($cursos2_relacionados->results as $items)
                                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                                        <div class="rounded-lg h-64 overflow-hidden">
                                            <img alt="content" class="object-cover object-center h-full w-full" src="{{$items->image_240x135}}">
                                        </div>
                                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">{{ $items->title }}</h2>
                                        <p class="text-base leading-relaxed mt-2">{{ $items->headline }}</p>
                                        <a href="{{ route('udemy_free_courses_es',['id_courses'=>$items->id,'rutafree'=>$items->published_title]) }}" class="text-indigo-500 inline-flex items-center mt-3">{{_('Ir al Curso')}}
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            </div>
        <div class="-mx-8 w-full xl:w-4/12 hidden lg:block">
            <div class="px-8">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490"
                 crossorigin="anonymous"></script>
            <!-- coupons_mid -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-7164053958255490"
                 data-ad-slot="5253705807"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
                <h1 class="mb-4 text-xl font-bold text-gray-700">CURSOS DESTACADOS</h1>
                <div class="flex flex-col bg-white max-w-lg px-6 py-4 mx-auto rounded-lg shadow-md">
                    @foreach ($cursosdestacados as $item)
                        <a href="{{ route('coupons-udemy.show_es', ['rutacoupons' => $item->ruta]) }}">
                            <div class="rounded w-full flex flex-col md:flex-row mb-10">
                                <img src="{{ asset($item->portada) }}"
                                    class="rounded-md h-32 sm:h-56 md:h-32 md:m-0 lg:h-16 m-4" />
                                <div class="bg-white rounded px-4">
                                    <div class="text-gray-800 font-semibold text-sm mb-2 md:mt-4 lg:mt-0">
                                        {{ $item->titulo }}
                                    </div>

                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection