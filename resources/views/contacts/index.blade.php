@extends('layouts.app')
@section('meta_language_es', 'https://cursosdev.com/')
@section('meta_language_en', 'https://en.cursosdev.com/')
@section('content')
    <!-- component -->
    <div class="relative flex items-top justify-center bg-white dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                        <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                            Ponte en contacto con nosotros
                        </h1>
                        <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">
                            Complete el formulario y nos pondremos en contácto lo más pronto posible
                        </p>
                        <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                <a href="https://www.facebook.com/CursosyCuponesparaUdemy" target="_blanck">
                                    <button class="flex text-center
                                            focus:outline-none border rounded-full
                                            py-2 px-6 leading-none border-gray-500
                                            dark:border-gray-600 select-none
                                            hover:bg-blue-400 hover:text-white
                                            dark-hover:text-gray-200">
                                        <span>Facebook</span>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                <a href="https://api.whatsapp.com/send?phone=51944259429&text=Informaci%C3%B3n"
                                    target="_blanck">
                                    <button
                                        class="flex items-center focus:outline-none border rounded-full py-2 px-6 leading-none border-gray-500
                                            dark:border-gray-600 select-none  hover:bg-blue-400 hover:text-white dark-hover:text-gray-200">
                                        <span>Whatsapp</span>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                info@cursosdev.com
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('contacts') }}" class="p-6 flex flex-col justify-center">
                        @csrf
                        <div class="flex flex-col">
                            <label for="name" class="hidden">{{__('Nombre')}}</label>
                            <input type="name" name="name" id="name" placeholder="{{__('Nombre')}}" value="{{ old('name') }}" required
                                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                            {!! $errors->first('name', '<small>:message</small><br>') !!}
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="email" class="hidden">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email"
                                required
                                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                            {!! $errors->first('email', '<small>:message</small><br>') !!}
                        </div>

                        <div class="text-sm flex flex-col">
                            <label for="mensage" class="font-bold mt-4 mb-2">{{__('Mensaje')}}</label>
                            <textarea name="mensage" id="mensage"
                                class="appearance-none w-full border border-gray-200 p-2 h-40 focus:outline-none focus:border-gray-500">{{ old('mensage') }}</textarea>
                            {!! $errors->first('mensage', '<small>:message</small><br>') !!}
                        </div>
                        <button type="submit"
                            class="md:w-32 bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                            {{__('Enviar')}}
                        </button>

                        @if (Session::has('ok-crear'))
                            <div
                                class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300">
                                <div
                                    class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                                    <span class="text-green-500">
                                        <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="alert-content ml-4">
                                    <div class="alert-title font-semibold text-lg text-green-800">
                                        {{__('Éxito')}}
                                    </div>
                                    <div class="alert-description text-sm text-green-600">
                                        {{__('Datos enviados correctamente..!')}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('newsletter.subscribe')
@endsection
