<!DOCTYPE html>
<html lang="pt-br">
<head>

    {{-- meta tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('imagens/site/icone.jpg') }}">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:title" content="Manu Design Criativo">
    <meta name="description" content="Traduzindo a Essência da Sua Empresa através da Identidade Visual">
    <meta property="og:description" content="Traduzindo a Essência da Sua Empresa através da Identidade Visual">
    <meta property="og:url" content="https://manudesign.com.br">

    {{-- favicons --}}
    <link rel="icon" sizes="130x130" href="{{ asset('imagens/favicon/favicon.png') }}">
    
    {{-- font awsome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    {{-- js tailwind --}}
    @vite('resources/js/app.js')

    {{-- css tailwind --}}
    @vite('resources/css/style.css')

    {{-- css | components --}}
    @stack('css')

    {{-- css global --}}
    <link rel="stylesheet" href="{{asset('css/global.css')}}">

    <title>@yield('title')</title>
</head>
<body>

    
    @yield('content')


    {{-- js | components --}}
    @stack('scripts')

    {{-- js global --}}
    <script src="{{asset('js/global.js')}}"></script>

</body>
</html>