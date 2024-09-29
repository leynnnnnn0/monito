<div>
    <x-navigation />
    <div class="p-5 space-y-3 2xl:px-80 lg:px-24">
        <div class="bg-primary-gradient rounded-lg flex-1 flex md:gap-2 md:justify-center md:h-fit md:flex-row-reverse flex-col">
            <section class="flex-1 w-auto md:m-0 m-5 flex flex-col md:px-3 md:items-center justify-center sm:items-center">
                <h1 class="font-bold text-text-primary xl:7xl lg:text-4xl md:text-2xl sm:text-5xl text-4xl">One More Friend</h1>
                <p class="text-text-primary font-bold xl:4xl lg:text-2xl md:text-base sm:text-2xl text-lg">Thousands More Fun!</p>
                <span class="xl:text-medium sm:text-center lg:text-xs md:text-[10px] md:text-center text-xs">Having a pet means you have more joy, a new friend, a happy person who will always be with you to have fun. We have 100+ different pets that can meet your needs!</span>
                <a href="" class="mt-3 w-fit rounded-full text-white sm:text-medium bg-text-primary px-6 py-3 xl:text-lg md:text-xs text-xs" wire:navigate>
                    Explore Now
                </a>
            </section>
            <img class="w-1/2" src=" {{ Vite::asset('resources/images/categoryBanner.svg')}}" alt="banner">
        </div>

        <div class="flex items-center justify-end">
            <button class="flex items-center gap-2 font-bold text-text-primary">
                <x-feathericon-filter /> Filter
            </button>
        </div>

        <div class="grid grid-cols-2 gap-5 lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3">
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
        </div>
    </div>

    <x-partials.footer />
</div>