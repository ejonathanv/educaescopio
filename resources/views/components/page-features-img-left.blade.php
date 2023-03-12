<section class="py-10 md:py-16 lg:py-20" id="{{ $id }}">
    <div class="container">
        <div class="flex flex-col md:flex-row items-center space-y-7 md:space-y-0">
            <div class="w-full md:w-5/12">
                <div class="page-features-img shadow-md" style="background-image: url({{ asset($img) }})"></div>
            </div>

            <div class="w-full md:w-7/12 md:pl-10">
                <h1 class="mb-7 leading-tight">{{ $title }}</h1>
                {{ $slot }}
            </div>
        </div>
    </div>
</section>