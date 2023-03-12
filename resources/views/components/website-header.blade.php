<header class="header">
    <div class="container flex items-center">
        <nav class="nav w-1/3 hidden lg:block">
            <ul class="flex items-center space-x-4">
                <li>
                    <a href="{{ route('home') }}" class="@if (Route::currentRouteName() == 'home') active @endif">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="@if (Route::currentRouteName() == 'about') active @endif">
                        Quienes somos
                    </a>
                </li>
                <li>
                    <a href="{{ route('nursery') }}" class="@if (Route::currentRouteName() == 'nursery') active @endif">
                        Guardería
                    </a>
                </li>
                <li>
                    <a href="{{ route('preschool') }}" class="@if (Route::currentRouteName() == 'preschool') active @endif">
                        Preescolar
                    </a>
                </li>
            </ul>
        </nav>

        <div class="w-1/2 lg:w-1/3 flex items-center justify-start lg:justify-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo w-auto h-24">
            </a>
        </div>

        <nav class="nav w-1/3 hidden lg:block">
            <ul class="flex items-center space-x-4 w-full items-center justify-end">
                <li>
                    <a href="{{ route('login') }}" class="@if (Route::currentRouteName() == 'login') active @endif">
                        Área para padres
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="@if (Route::currentRouteName() == 'contact') active @endif">
                        Contacto
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/educaescopio_/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/educaescopio/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="w-1/2 flex items-center justify-end block lg:hidden relative z-50">
            <a href="#" class="menu-button">
                <i class="fas fa-bars fa-2x"></i>
            </a>
            <div class="menu-content flex items-center justify-center flex-col space-y-6">

                <a href="#" class="top-9 right-5 absolute close-button">
                    <i class="fas fa-times fa-2x"></i>
                </a>

                <a href="#">
                    <img src="{{ asset('../img/logo.png') }}" alt="Logo" class="logo w-auto h-24">
                </a>

                <nav>
                    <ul class="text-2xl flex flex-col items-center space-y-6">
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('about') }}">Quienes somos</a></li>
                        <li><a href="{{ route('nursery') }}">Guardería</a></li>
                        <li><a href="{{ route('preschool') }}">Preescolar</a></li>
                        <li><a href="{{ route('login') }}">Área para padres</a></li>
                        <li><a href="{{ route('contact') }}">Contacto</a></li>
                        <li class="flex items-center space-x-6">
                            <a href="https://www.instagram.com/educaescopio_/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/educaescopio/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>