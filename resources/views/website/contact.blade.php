<x-guest-layout title="Comunicate con nosotros">
    <section class="py-10 md:py-16 lg:py-20">
        <div class="container flex flex-col md:flex-row items-center space-y-10 md:space-y-0 md:space-x-20">
            <div class="w-full md:w-1/2">
                <h1 class="mb-10">Contacto</h1>
                <p class="lead mb-10">
                Si tienes alguna duda o sugerencia no dudes en comunicarte con nosotros. También puedes escribirnos por correo electrónico ó bien llamarnos de forma directa en un horario de 9:00 a 18:00 hrs. 
                </p>

                <h4 class="mb-2">Correo electrónico</h4>
                <p class="mb-7 font-bold">
                    <a href="mailto:{{ env('APP_EMAIL') }}">
                        {{ env('APP_EMAIL') }}
                    </a>
                </p>

                <h4 class="mb-2">Teléfono</h4>
                <p class="mb-7 font-bold">
                    <a href="tel:{{ env('APP_PHONE') }}">
                        {{ env('APP_PHONE') }}
                    </a>
                </p>

                <h4 class="mb-2">Horario de atención</h4>
                <p class="mb-7 font-bold">
                    Lunes a Viernes de 9:00 a 18:00 hrs.
                </p>

                <h4 class="mb-2">Dirección</h4>
                <p class="font-bold">
                    Blvrd Las Cascadas, Balcon las Huertas, 22116 Tijuana, B.C.
                </p>
            </div>
            <div class="w-full md:w-1/2">
                <form action="{{ route('submitForm') }}" method="post" class="bg-white shadow p-7 rounded" onsubmit="document.getElementById('submitButton').disabled = true;">

                    @if (session('success'))
                        <div class="bg-green-200 text-green-700 p-4 rounded mb-7">
                            {{ session('success') }}
                        </div>
                    @endif

                    @csrf

                    <div class="form-group">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ingresa tu nombre" required value="{{ old('name') }}">
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Ingresa tu correo electrónico" required value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Teléfono (Opcional)</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Ingresa tu teléfono" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Ingresa tu mensaje" required>{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="terms" id="terms" required>
                            <span>He leido las <a href="{{ route('privacyPolicy') }}" class="underline">políticas de privacidad</a></span>
                        </label>
                        <div>
                            @error('terms')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" id="submitButton">
                        Enviar mensaje
                    </button>

                </form>
            </div>
        </div>
    </section>
</x-guest-layout>