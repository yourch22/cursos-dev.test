<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
	<script src="https://www.googleoptimize.com/optimize.js?id=OPT-PPRH885"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token()}}">
	<title>{{ config('app.name')}} | @yield('meta_title')</title>
	<meta name="title" content="@yield('meta_title')">
	<meta name="description" content="@yield('meta_description')">
	<meta name="keyword" content="@yield('meta_keyword')">
	<meta property="og:type" content="website" />
	<meta property="og:title" content="@yield('meta_title')">
	<meta property="og:url" content="@yield('meta_url')">
	<meta property="og:description" content="@yield('meta_description')">
	<meta property="og:image" content="@yield('meta_image')">
	<meta property="og:site_name" content="Cursos Dev">
	<meta property="og:locale" content="en_US">
	<meta property="fb:app_id" content="490936802074969" />
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="@yield('meta_title')">
	<meta name="twitter:url" content="@yield('meta_url')">
	<meta name="twitter:description" content="@yield('meta_description')">
	<meta name="twitter:image" content="@yield('meta_image')">
	<meta name="twitter:site" content="@cursosdev">
	<meta itemprop="name" content="@yield('meta_title')">
	<meta itemprop="url" content="@yield('meta_url')">
	<meta itemprop="description" content="@yield('meta_description')">
	<meta itemprop="image" content="@yield('meta_image')">
	<link rel='stylesheet' href='https://unpkg.com/swiper/swiper-bundle.min.css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="icon" href="{{ asset('img/plantilla/icono.png')}}">
	{{-- <link rel="stylesheet" href="{{ mix('css/app.css')}}"> --}}
	<link href="{{ asset('css/style-min.css')}}" rel="stylesheet">
	{{-- <script src="{{ mix('js/app.js')}}" defer></script> --}}
	@vite(['resources/css/app.css','resources/js/app.js'])
	<script type="text/javascript">
(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(68995303, "init",{ clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true});
	</script><noscript><div><img src="https://mc.yandex.ru/watch/68995303" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173936104-2"></script>
	<script>
window.dataLayer=window.dataLayer || []; function gtag(){dataLayer.push(arguments)} gtag('js', new Date()); gtag('config', 'UA-173936104-2');
	</script>
	<script data-ad-client="ca-pub-7164053958255490" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '234252468334748'); fbq('track', 'PageView');
	</script><noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=234252468334748&ev=PageView&noscript=1"/></noscript>
	<meta name="facebook-domain-verification" content="ykr9u5ejovaw3wnwrrocddto52llno" />
	<meta name="verify-admitad" content="bbfea38a4c" />
</head>
<body class="h-full min-h-full  font-sans antialiased overflow-x-hidden" x-data="{ mobileMenuOpen: false}">
	<header>
        @include('modules.header') </header>
	<main>
        @yield('content') </main>
	<div class="cookie-container mx-auto px-4 container overflow-hidden flex flex-col lg:flex-row justify-between">
		<p class="mx-auto my-4">Usamos cookies en este sitio web para brindarle la mejor experiencia en nuestro sitio y mostrarle anuncios relevantes. Para obtener más información, lea nuestro <a class="font-semibold underline text-blue-800" href="politicas-de-privacidad">política de privacidad</a>& <a class="font-semibold underline text-blue-800" href="politica-de-cookies">política de cookies</a>. </p><button class="cookie-btn py-2 my-4 px-8 bg-indigo-400 hover:bg-indigo-500 text-white rounded font-bold text-sm shadow-xl">Acepto </button></div>
	<footer class="bg-gray-800 text-white pt-12 pb-8 px-4">@include('modules.footer') </footer>
	<script src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ asset('js/category-min.js')}}"></script>
	<script src="{{ asset('js/pagination.min.js')}}"></script>
	<script src="{{ asset('js/myapp-min.js')}}"></script>
	<script src="{{ asset('js/pagination-min.js')}}"></script>
	<script src="{{ asset('js/share-min.js')}}"></script>
	<script src="{{ asset('js/contacts-min.js')}}"></script>
	<script src="{{asset('js/filter-min.js')}}"></script>
	<script src="{{asset('js/search_udemy_free.js')}}"></script>
	<script src='https://unpkg.com/swiper/swiper-bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.5.0/alpine.js'></script>
    <script src="{{asset('js/mainmenu-min.js')}}"></script>
</body>
</html>