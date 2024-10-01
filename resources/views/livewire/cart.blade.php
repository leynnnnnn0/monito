<div class="flex flex-col bg-light-gray min-h-screen">
    <x-navigation class="bg-white" />
    <div class="flex-1 flex flex-col items-center justify-center 2xl:px-80 lg:px-24 p-5">
        <table class="table-auto w-full rounded-lg overflow-hidden bg-white">
            <tr class="bg-text-primary text-white">
                <x-th>Pet</x-th>
                <x-th class="sm:table-cell hidden">Age</x-th>
                <x-th class="sm:table-cell hidden">Gender</x-th>
                <x-th>Price</x-th>
                <x-th>Action</x-th>
            </tr>
            @foreach ($data as $pet)
            <tr>
                <x-td>
                    <div class="sm:flex gap-2">
                        <img class="sm:size-16 size-8" src="{{ asset('storage/' . $pet->images[0]->name)}}" alt="dog image">
                        <section class="flex flex-col">
                            <span class="text-text-primary text-lg">{{ $pet->breed}}</span>
                            <span class="text-gray-500 text-xs font-light">Color: {{ $pet->color}}</span>
                            <span class="text-gray-500 text-xs font-light">Size: {{ $pet->size }}</span>
                        </section>
                    </div>
                </x-td>
                <x-td class="sm:table-cell hidden">
                    {{ Carbon\Carbon::parse($pet->date_of_birth)->age}}
                </x-td>
                <x-td class="sm:table-cell hidden">
                    {{ $pet->gender }}
                </x-td>
                <x-td>
                    ${{ Number::format($pet->pricingAvailability->price, 2)}}
                </x-td>
                <x-td>
                    <button wire:click="removeItem('{{ $pet->id }}')">
                        <x-bi-trash-fill class="text-red-500 size-5" />
                    </button>
                </x-td>
            </tr>
            @endforeach
        </table>
        <div class="w-full flex justify-end p-5 bg-gray">
            <section class="flex flex-col gap-2 w-96">
                <div class="flex flex-col border-b border-gray-200 py-5">
                    <span class="text-gray-500 text-normal font-bold">Sub Total: $3,400.00</span>
                    <span class="text-gray-500 text-normal font-bold">Shipping: free</span>
                </div>
                <div class="flex w-full">
                    <button class="w-full bg-green-500 rounded-xl px-4 py-1 text-white">
                        Checkout
                    </button>
                </div>
            </section>
        </div>
    </div>
    <x-partials.footer />
</div>