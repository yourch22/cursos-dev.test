<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490" crossorigin="anonymous"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>CURSOSDEV</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="icon" href="{{ asset('img/plantilla/icono.png') }}">
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
        <script src="{{ asset('js/courses.js') }}" defer></script> 
        <link href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css" rel="stylesheet">
        <style>
        /* Custom style */
            .header-right {
                width: calc(100% - 3.5rem);
            }
            .sidebar:hover {
                width: 16rem;
            }
            @media only screen and (min-width: 768px) {
                .header-right {
                    width: calc(100% - 16rem);
                }        
            }
        </style>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-8QSZ21QVNX"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-8QSZ21QVNX');
        </script>
    </head>
    <body class="overflow-scroll overflow-x-hidden items-center justify-center">
            <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black">
                <header>
                    @include('modules2.header')
                </header>
                    @include('modules2.sidebar')
                
                    @yield('content')
                
                <footer class="">
                    @include('modules2.footer')
                </footer>
            </div>
                        <script type="text/javascript">
        var vglnk = {key: '02edc4a1787edd3b33fbf6703d1cc9b8'};
        (function(d, t) {
            var s = d.createElement(t);
                s.type = 'text/javascript';
                s.async = true;
                s.src = '//cdn.viglink.com/api/vglnk.js';
            var r = d.getElementsByTagName(t)[0];
                r.parentNode.insertBefore(s, r);
        }(document, 'script'));
    </script>
    </body>
</html>
