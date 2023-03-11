<section class="py-10 md:py-16 lg:py-20 page-cover" style="background-image: url({{ asset($img) }})">
    <div class="container flex flex-col md:flex-row items-center space-x-0 md:space-x-16 space-y-10 md:space-y-0">
        <div class="w-full md:w-2/3">
            <h1 class="mb-7 text-white jumbo-title">
                {{ $title }}
            </h1>
            <p class="text-white lead">
                {{ $description }}
            </p>
        </div>
        <div class="w-full md:w-1/3 flex flex-col space-y-4">
            {{ $call_to_action }}
        </div>
    </div>
</section>