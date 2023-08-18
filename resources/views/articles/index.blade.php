@extends('layouts.app')
@section('meta_title','Blog Cursos de programación e informática '.date('M , Y'))
@section('meta_description','Encuentra los mejores post de programación, desarrollo web, desarrollo movíl,base de datos entre muchos otros... contenidos actualizados. Mejores cupones en línea')
@section('meta_keyword','Cupones para Udemy & Cursos Online Gratis,codigos de promocion 100% OFF, cupones gratis,cursos gratis,cursos udemy gratis,descargar cursos de udemy gratis,cursos udemy mega,download courses udemy for Mega')
@section('meta_url',route('articles.index_es'))
@section('meta_image',url('/').'/img/plantilla/cupones-udemy-gratis.jpg')
@section('meta_language_es', 'https://cursosdev.com/blog')
@section('meta_language_en', 'https://en.cursosdev.com/blog')
@section('content')

<div class="max-w-screen-xl mx-auto">
    <main class="mt-12">
        <!-- featured section -->
        <div class="flex flex-wrap md:flex-nowrap space-x-0 md:space-x-6 mb-16">
            <!-- main post -->
            <div class="mb-4 lg:mb-0  p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
                <img loading="lazy" src="{{asset('/')}}{{$articulos[0]['portada']}}" class="rounded-md object-cover w-full h-64">
                {{-- <span class="text-green-700 text-sm hidden md:block mt-4"> Tecnologia </span> --}}
                <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                    {{$articulos[0]['titulo']}}
                </h1>
                <p class="text-gray-600 mb-4">
                    {{$articulos[0]['descripcion']}}
                </p>
                    <a href="{{route('articles.show_es',['ruta'=>$articulos[0]['ruta']])}}" class="inline-block px-6 py-3 mt-2 rounded-md text-white bg-blue850 hover:bg-indigo-500 transition duration-150 ease-in-out">
                        Lerr más
                    </a>
            </div>

            <!-- sub-main posts -->
            <div class="w-full md:w-4/7">
                <!-- post 1 -->
                <!--<div class="rounded w-full flex flex-col md:flex-row mb-10">-->
                <!--    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60"-->
                <!--        class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />-->
                <!--    <div class="bg-white rounded px-4">-->
                <!--        <span class="text-green-700 text-sm hidden md:block"> Gadgets </span>-->
                <!--        <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">-->
                <!--            At every tiled on ye defer do. No attention suspected oh difficult.-->
                <!--        </div>-->
                <!--        <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">-->
                <!--            Wonder matter now can estate esteem assure fat roused. Am performed on existence as-->
                <!--            discourse is. Pleasure friendly at marriage blessing or-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->

                 {{-- post 2  --}}
                <!--<div class="rounded w-full flex flex-col md:flex-row mb-10">-->
                <!--    <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60"-->
                <!--        class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />-->
                <!--    <div class="bg-white rounded px-4">-->
                <!--        <span class="text-green-700 text-sm hidden md:block"> Bitcoin </span>-->
                <!--        <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">-->
                <!--            Fond his say old meet cold find come whom. The sir park sake bred.-->
                <!--        </div>-->
                <!--        <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">-->
                <!--            Integer commodo, sapien ut vulputate viverra, Integer commodo-->
                <!--            Integer commodo, sapien ut vulputate viverra, Integer commodo-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
                 {{-- post 3  --}}
                <!--<div class="rounded w-full flex flex-col md:flex-row mb-10">-->
                <!--    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60"-->
                <!--        class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />-->
                <!--    <div class="bg-white rounded px-4">-->
                <!--        <span class="text-green-700 text-sm hidden md:block"> Insights </span>-->
                <!--        <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">-->
                <!--            Advice me cousin an spring of needed. Tell use paid law ever yet new.-->
                <!--        </div>-->
                <!--        <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">-->
                <!--            Meant to learn of vexed if style allow he there. Tiled man stand tears ten joy there terms-->
                <!--            any widen.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
                 {{-- post 4  --}}
                <!--<div class="rounded w-full flex flex-col md:flex-row mb-10">-->
                <!--    <img src="https://images.unsplash.com/photo-1489844097929-c8d5b91c456e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60"-->
                <!--        class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />-->
                <!--    <div class="bg-white rounded px-4">-->
                <!--        <span class="text-green-700 text-sm hidden md:block"> Cryptocurrency </span>-->
                <!--        <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">-->
                <!--            Advice me cousin an spring of needed. Tell use paid law ever yet new.-->
                <!--        </div>-->
                <!--        <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">-->
                <!--            Meant to learn of vexed if style allow he there. Tiled man stand tears ten joy there terms-->
                <!--            any widen.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
                            
            </div>

        </div>
        <!-- end featured section -->

        <!-- recent posts -->
        <div class="flex mt-16 mb-4 px-4 lg:px-0 items-center justify-between">
            <h2 class="font-bold text-3xl">Últimos Articulos</h2>
            <a href="#" class="text-white bg-blue850 hover:bg-indigo-500 transition duration-150 ease-in-out px-3 py-1 rounded cursor-pointer">
                Ver todo
            </a>
        </div>
        <div class="block space-x-0 lg:flex lg:space-x-6">
            @foreach ($articulos as $item)
                <div class="rounded w-full  lg:w-1/3 p-4 lg:p-0">
                    <img loading="lazy" src="{{asset('/')}}{{$item->portada}}"
                    class="rounded" alt="technology" />
                    <div class="p-4 pl-0">
                    <h2 class="font-bold text-2xl text-gray-800">{{$item->titulo}}</h2>
                        <p class="text-gray-700 mt-2">
                            {{$item->descripcion}}
                        </p>
                            <a href="{{route('articles.show_es',['ruta'=>$item->ruta])}}" class="inline-block px-6 py-3 mt-2 rounded-md text-white bg-blue850 hover:bg-indigo-500 transition duration-150 ease-in-out">
                                Lerr más
                            </a>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- end recent posts -->
    </main>
    <!-- main ends here -->
</div>
@include('newsletter.subscribe')
@endsection
