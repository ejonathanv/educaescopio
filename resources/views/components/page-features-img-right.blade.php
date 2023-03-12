<section class="py-10 md:py-16 lg:py-20">
    <div class="container">
        <div class="flex flex-col-reverse md:flex-row items-center">
            <div class="w-full md:w-7/12 md:pr-10 mt-7 md:mt-0">
                <h1 class="mb-7 leading-tight">{{ $title }}</h1>
                {{ $slot }}
            </div>
            <div class="w-full md:w-5/12">
                <div class="page-features-img shadow-md" style="background-image: url({{ asset($img) }})"></div>
            </div>
        </div>
    </div>
</section>