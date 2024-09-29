<div class="space-y-2">
    <x-navigation class="md:flex hidden" />
    <section class="md:flex gap-10 p-2 2xl:px-80 lg:px-24">
        <section class="h-auto md:w-[500px] rounded-lg">
            <img class="md:rounded-lg h-80 w-full" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog">
            <section class="grid grid-cols-5 p-2">
                <img class="size-14 rounded-lg" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog">
                <img class="size-14 rounded-lg" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog">
                <img class="size-14 rounded-lg" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog">
                <img class="size-14 rounded-lg" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog">
                <img class="size-14 rounded-lg" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog">
            </section>
        </section>
        <section class="space-y-2">
            <section class="flex flex-col">
                <strong clasas="text-3xl">Shiba Inu Sepia</strong>
                <span class="font-bold text-text-primary">$12,500.00</span>
                <div class="flex items-center gap-2">
                    <button class="w-full mt-3 rounded-full text-text-primary sm:text-medium border border-text-primary px-6 py-2 xl:text-lg md:text-xs text-sm">
                        Add to Cart
                    </button>
                    <button class="w-full mt-3 rounded-full text-white sm:text-medium bg-text-primary px-6 py-2 xl:text-lg md:text-xs text-sm">
                        Buy Now
                    </button>
                </div>
            </section>
            <section class="flex flex-col">
                <h1 class="text-text-primary font-bold">Information</h1>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Pet ID: </span>
                    <span class="flex-1">#42134793</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Gender: </span>
                    <span class="flex-1">Female</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Age: </span>
                    <span class="flex-1">2 months</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Size: </span>
                    <span class="flex-1">Small</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Color: </span>
                    <span class="flex-1">Appricot & Tan</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Vacinated: </span>
                    <span class="flex-1">True</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Dewormed: </span>
                    <span class="flex-1">True</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Additional Information: </span>
                    <span class="flex-1">Pure breed Shih Tzu.
                        Good body structure.
                        With MKA cert and microchip. Father from champion lineage.</span>
                </div>
            </section>
        </section>
    </section>

    <section class="p-2 2xl:px-80 lg:px-24">
        <h1 class="text-text-primary font-bold text-xl">See More Poppies</h1>
        <div class="grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-3 grid-cols-2">
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
            <x-pet-container />
        </div>
    </section>
    <x-partials.footer />
</div>