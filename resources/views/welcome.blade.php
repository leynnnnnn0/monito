<x-layouts.main>
    <section class="flex flex-col min-h-screen bg-primary-gradient">
        <x-navigation />
        <section class="flex-1 flex flex-col px-5 justify-center">
            <h1 class="font-bold text-text-primary text-4xl">One More Friend</h1>
            <p class="text-text-primary font-bold text-lg">Thousands More Fun!</p>
            <span class="text-text-primary text-xs">Having a pet means you have more joy, a new firend a happy person who will always be with you to have fun. We have 100+ different petsthat can meet your need!</span>
            <a href="" class="mt-5 text-xs text-white bg-text-primary px-6 py-3 w-fit rounded-full" wire:navigate>
                Explore Now
            </a>
        </section>
        <img src="{{ Vite::asset('resources/images/mobileBanner.svg')}}" alt="banner">
    </section>
    <section class="p-5 bg-white/10 space-y-3">
        <div>
            <span class="font-medium">What's new?</span>
            <h1 class="text-text-primary font-semibold text-lg">Take A Look At Some of Our Pets</h1>
        </div>
        <section class="grid grid-cols-2 gap-2">
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
        </section>
    </section>
</x-layouts.main>