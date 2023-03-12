<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Educaescopio | Mi Pequeño Travieso, Estancia Infantial - Guardería y Preescolar en Tijuana Baja California">
        <meta name="keywords" content=" Guardería, Preescolar, Estancia Infantil, Tijuana, Baja California, México, Educación, Aprendizaje, Niños, Niñas, Jardín de Niños, Jardín de Niñas, Jardín de Niños y Niñas, Educación Infantil, Educación Preescolar, Educación Inicial, Educaescopio, Pequeño, Travieso, Mi Pequeño Travieso">
        <meta name="author" content="Educaescopio | Mi Pequeño Travieso">
        
        <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <title>{{$title}} | {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
        
        <x-website-header />

        <main class="main">
            {{ $slot }}
        </main>

        <x-website-footer />

    </body>
</html>
