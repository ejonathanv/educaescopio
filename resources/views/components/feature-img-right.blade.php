<section class="feature-img-right py-10">
    <div class="container">
        <div class="bg-white flex flex-col-reverse md:flex-row items-stretch justify-center shadow">
            <div class="p-10 md:p-20 w-full md:w-1/2 flex items-center justify-center">
                <div>
                    <h1 class="mb-7 leading-tight">{{ $title }}</h1>
                    <p>{{ $subtitle }}</p>
                </div>
            </div>
            <div class="feature-img-bg w-full md:w-1/2" style="background-image: url({{ asset($bgimg) }})">
                <img src="{{ asset('img/recuadros_inv.png') }}" class="squares" alt="">
            </div>
        </div>
    </div>
</section>