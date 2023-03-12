<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d53847.934119083664!2d-116.954464!3d32.486173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fb247b88fc2ff5%3A0x4881765d826c800b!2sEstancia%20Infantil%20y%20Preescolar%20Mi%20Peque%C3%B1o%20Travieso!5e0!3m2!1ses-419!2smx!4v1678139227313!5m2!1ses-419!2smx" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<footer class="footer">
    <div class="container text-center md:text-left flex items-center justify-center md:justify-between mb-10 flex-col lg:flex-row space-y-6 lg:space-y-0">
        <div class="w-full lg:w-1/4 flex items-center justify-center md:justify-start">
            <a href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-24">
            </a>
        </div>
        <div class="w-full lg:w-1/4">
            <h1 class="mb-6">Contacto</h1>
            <p>
                <i class="fas fa-phone"></i>
                <a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a>
            </p>
            <p>
                <i class="fas fa-envelope"></i>
                <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
            </p>
        </div>
        <div class="w-full lg:w-1/4">
            <h1 class="mb-6">Programas</h1>
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('nursery') }}">Guardería</a>
                    </li>
                    <li>
                        <a href="{{ route('preschool') }}">Preescolar</a>
                    </li>
                    <li>
                        <a href="{{ route('privacyPolicy') }}">Políticas de privacidad</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <p class="text-sm text-center md:text-left">
            © {{ date('Y') }} {{ config('app.name') }}. Derechos Reservados.
        </p>
    </div>
</footer>

<a href="https://api.whatsapp.com/send?phone=+52{{ env('APP_WHATSAPP') }}&text=Hola,%20me%20gustaría%20saber%20más%20sobre%20sus%20servicios."  
    target="_blank"
    class="whatsapp_icon">
    <img src="{{ asset('img/whatsapp_icon.svg') }}" alt="">
</a>