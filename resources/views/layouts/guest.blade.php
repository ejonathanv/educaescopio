<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Educaescopio | Mi Pequeño Travieso, Estancia Infantial - Guardería y Preescolar en Tijuana Baja California">
        <meta name="keywords" content=" Guardería, Preescolar, Estancia Infantil, Tijuana, Baja California, México, Educación, Aprendizaje, Niños, Niñas, Jardín de Niños, Jardín de Niñas, Jardín de Niños y Niñas, Educación Infantil, Educación Preescolar, Educación Inicial, Educaescopio, Pequeño, Travieso, Mi Pequeño Travieso">
        <meta name="author" content="Educaescopio | Mi Pequeño Travieso">

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
