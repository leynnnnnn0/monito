<div class="space-y-2">
    <x-navigation class="md:flex hidden" />
    <section class="md:flex gap-10 p-2 2xl:px-80 lg:px-24">
        <section class="h-auto md:w-[500px] rounded-lg">
            <img class="md:rounded-lg h-80 w-full" src="{{ asset('storage/' . $pet->images[0]->name) }}" alt="dog">
            <section class="grid grid-cols-5 p-2">
                @foreach ($pet->images as $image)
                <img class="size-14 rounded-lg" src="{{ asset('storage/' . $image->name)}}" alt="dog">
                @endforeach
            </section>
        </section>
        <section class="space-y-2 md:w-1/2 w-full">
            <section class="flex flex-col">
                <strong clasas="text-3xl">{{ $pet->breed}}</strong>
                <span class="font-bold text-text-primary">${{Number::format($pet->pricingAvailability->price, 2) }}</span>
                <div class="flex items-center gap-2">
                    <button wire:click="addToCart('{{$pet->id}}')" class="w-full mt-3 rounded-full text-text-primary sm:text-medium border border-text-primary px-6 py-2 xl:text-lg md:text-xs text-sm" wire:loading.remove>
                        Add To Cart
                    </button>
                    <button disabled class="flex items-center justify-center w-full mt-3 rounded-full text-text-primary sm:text-medium border border-text-primary px-6 py-2 xl:text-lg md:text-xs text-sm" wire:loading>
                        <span class="flex items-center justify-center">
                            <svg class="animate-spin h-6 w-6 text-text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </span>
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
                    <span class="flex-1">#{{ $pet->id }}</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Gender: </span>
                    <span class="flex-1">{{ $pet->gender }}</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Age: </span>
                    <span class="flex-1">2 months</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Size: </span>
                    <span class="flex-1">{{ $pet->size}}</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Color: </span>
                    <span class="flex-1">{{ $pet->color }}</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Vaccinated: </span>
                    <span class="flex-1">{{ $pet->health->vaccinated ? 'Yes' : 'No' }}</span>
                </div>
                <div class="flex items-center justify-between border-b border-black/10 py-2 text-gray-500 text-xs">
                    <span class="flex-1">Additional Information: </span>
                    <span class="flex-1">{{ $pet->additionalInfo ? $pet->additionalInfo->description : 'None' }}.</span>
                </div>
            </section>
        </section>
    </section>

    <section class="p-2 2xl:px-80 lg:px-24">
        <h1 class="text-text-primary font-bold text-xl">See More Poppies</h1>
        <div id="paginated-show-page" class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2">
            @foreach ($data as $pet)
            <x-pet-container :breed="$pet->breed"
                :id="$pet->id"
                :gender="$pet->gender"
                :price="$pet->pricingAvailability->price"
                :source="$pet->images[0]['name']" />
            @endforeach
        </div>
        <div class="w-full mt-5">
            {{ $data->links(data: ['scrollTo' => 'paginated-show-page']) }}
        </div>
    </section>
    <x-partials.footer />
</div>