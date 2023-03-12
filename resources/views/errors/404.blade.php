<x-guest-layout title="Error 404">
    <section class="py-10 md:py-20">
        <div class="container">
            <div class="w-1/3 mx-auto text-center">
                <h1 class="mb-4">
                    Error 404
                </h1>
                <p class="lead">
                    La página que buscas no existe, por favor regresa <a href="{{ route('home') }}" class="underline">al inicio</a>.
                </p>
            </div>
        </div>
    </section>
</x-guest-layout>