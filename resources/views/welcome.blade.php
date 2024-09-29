    <x-layouts.main>
        <section class="flex flex-col min-h-screen bg-primary-gradient">
            <x-navigation />
            <section class="flex-1 flex flex-col sm:justify-center sm:items-center px-5 justify-center">
                <h1 class="font-bold text-text-primary sm:text-5xl text-4xl">One More Friend</h1>
                <p class="text-text-primary font-bold sm:text-xl text-lg">Thousands More Fun!</p>
                <span class="sm:text-center text-medium">Having a pet means you have more joy, a new firend a happy person who will always be with you to have fun. We have 100+ different petsthat can meet your need!</span>
                <a href="" class="mt-5 w-fit rounded-full text-white sm:text-medium bg-text-primary px-6 py-3 text-xs" wire:navigate>
                    Explore Now
                </a>
            </section>
            <img src="{{ Vite::asset('resources/images/mobileBanner.svg')}}" alt="banner">
        </section>

        <section class="p-5 bg-[#FDFDFD]space-y-3">
            <div>
                <span class="font-medium">What's new?</span>
                <h1 class="text-text-primary font-semibold text-lg">Take A Look At Some of Our Pets</h1>
            </div>
            <section class="grid gap-2 sm:grid-cols-3 grid-cols-2">
                <x-pet-container />
                <x-pet-container />
                <x-pet-container />
                <x-pet-container />
                <x-pet-container />
                <x-pet-container />
            </section>
            <a href="" class="flex w-full items-center justify-center border border-text-primary text-text-primary py-2 rounded-full">View more <x-phosphor-caret-right class="h-[20px]" /></a>
        </section>

        <section class="min-h-screen p-5 flex">
            <div class="flex-grow w-full flex flex-col items-center bg-primary-gradient rounded-lg">
                <section class="flex-1 text-center m-5 flex flex-col gap-2 sm:items-center sm:justify-center">
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

        <section class="p-5">
            <div>
                <span class="font-medium">You already know?</span>
                <h1 class="text-text-primary font-semibold text-lg">Useful Pet Knowledge</h1>
            </div>
            <section class="grid sm:grid-cols-2">
                <x-knowledge-container />
                <x-knowledge-container />
                <x-knowledge-container />
                <x-knowledge-container />
            </section>
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