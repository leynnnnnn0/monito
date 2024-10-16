<x-layouts.main>
    <section class="flex sm:min-h-fit min-h-screen bg-primary-gradient md:gap-2 sm:gap-12 flex-col">
        <x-navigation />
        <div class="flex-1 flex md:justify-center md:flex-row flex-col 2xl:px-80 lg:px-24">
            <section class="flex-1 w-full flex flex-col px-5 md:items-start justify-center sm:items-center">
                <h1 class="font-bold text-text-primary xl:7xl sm:text-5xl text-4xl">One More Friend</h1>
                <p class="text-text-primary font-bold xl:4xl sm:text-2xl text-lg">Thousands More Fun!</p>
                <span class="md:text-start xl:text-medium sm:text-center text-sm">Having a pet means you have more joy, a new friend, a happy person who will always be with you to have fun. We have 100+ different pets that can meet your needs!</span>
                <a href="" class="mt-3 w-fit rounded-full text-white sm:text-medium bg-text-primary px-6 py-3 xl:text-lg md:text-xs text-xs" wire:navigate>
                    Explore Now
                </a>
            </section>
            <img class="md:hidden w-full" src="{{ Vite::asset('resources/images/mobileBanner.svg')}}" alt="banner">
            <img class="md:flex hidden" src="{{ Vite::asset('resources/images/mainBanner.svg')}}" alt="banner">
        </div>
    </section>

    <section class="p-5 bg-[#FDFDFD] space-y-3 2xl:px-80 lg:px-24">
        <section class="md:flex md:items-center md:justify-between">
            <div>
                <span class="font-medium">What's new?</span>
                <h1 class="text-text-primary font-semibold text-lg">Take A Look At Some of Our Pets</h1>
            </div>
            <a href="" class="text-sm flex px-3 items-center justify-center border border-text-primary text-text-primary py-1 rounded-full">View more <x-phosphor-caret-right class="h-[20px]" /></a>
        </section>
        <section class="grid gap-2 lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2">
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
        </section>
        <a href="" class="md:hidden flex w-full items-center justify-center border border-text-primary text-text-primary py-2 rounded-full">View more <x-phosphor-caret-right class="h-[20px]" /></a>
    </section>

    <section class="sm:min-h-[400px] min-h-screen p-5 flex 2xl:px-80 lg:px-24">
        <div class="flex-grow w-full flex flex-col items-center bg-primary-gradient rounded-lg md:flex-row">
            <section class="flex-1 md:text-start text-center m-5 flex flex-col gap-2 md:items-start md:justify-start sm:items-center sm:justify-center">
                <h1 class="text-text-primary sm:text-5xl text-3xl font-bold">
                    One More Friend
                </h1>
                <h3 class="text-text-primary font-bold sm:2xl text-xl">Thousands More Fun!</h3>
                <span class="sm:text-medium text-xs">Having a pet means you have more joy, a new firend a happy person who will always be with you to have fun. We have 100+ different petsthat can meet your need!</span>
                <div class="flex justify-center">
                    <a href="" class="mt-5 text-white bg-text-primary px-6 py-3 w-fit rounded-full sm:text-sm text-xs" wire:navigate>
                        Explore Now
                    </a>
                </div>
            </section>
            <img src="{{ Vite::asset('resources/images/mobileBanner2.svg')}}" alt="girl carrying a dog">
        </div>
    </section>

    <section class="p-5 2xl:px-80 lg:px-24">
        <section class="md:flex md:items-center md:justify-between">
            <div>
                <span class="font-medium">Do you know?</span>
                <h1 class="text-text-primary font-semibold text-lg">Useful pet knowledge</h1>
            </div>
            <a href="" class="text-sm flex px-3 items-center justify-center border border-text-primary text-text-primary py-1 rounded-full">View more <x-phosphor-caret-right class="h-[20px]" /></a>
        </section>
        <section class="grid lg:grid-cols-4 sm:grid-cols-2">
            <x-knowledge-container />
            <x-knowledge-container />
            <x-knowledge-container />
            <x-knowledge-container />
        </section>
        <a href="" class="md:hidden flex w-full items-center justify-center border border-text-primary text-text-primary py-2 rounded-full">View more <x-phosphor-caret-right class="h-[20px]" /></a>
    </section>

    <footer class="flex flex-col gap-4 items-center bg-primary-gradient p-5">
        <img class="h-[30px]" src="{{ Vite::asset('resources/images/logo.svg')}}" alt="logo">
        <div class="flex items-center justify-center gap-2">
            <span class="text-gray-400 text-[10px]">Terms of Service</span>
            <span class="text-gray-400 text-[10px]">Privacy Policy</span>
        </div>
        <span class="text-gray-400 text-[10px]">
            2024 Monito. All rights reservered.
        </span>
    </footer>

</x-layouts.main>