<div>
    <x-navigation />
    <div class="2xl:px-80 lg:px-24">
        <table class="table-auto w-full rounded-lg overflow-hidden">
            <tr class="bg-text-primary text-white">
                <x-th>
                    Pet
                </x-th>
                <x-th>
                    Age
                </x-th>
                <x-th>
                    Gender
                </x-th>
                <x-th>
                    Price
                </x-th>
                <x-th>
                    Action
                </x-th>
            </tr>
            <tr>
                <x-td>
                    <div class="flex gap-2">
                        <img class="size-16" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog image">
                        <section class="flex flex-col">
                            <span class="text-text-primary text-lg">Shiba Inu</span>
                            <span class="text-gray-500 text-xs font-light">Color: Yellow & White</span>
                            <span class="text-gray-500 text-xs font-light">Size: Large</span>
                        </section>
                    </div>
                </x-td>
                <x-td>
                    2 months
                </x-td>
                <x-td>
                    Male
                </x-td>
                <x-td>
                    $3,400.00
                </x-td>
                <x-td>
                    <button>
                        <x-bi-trash-fill class="text-text-primary size-5" />
                    </button>
                </x-td>
            </tr>
            <tr>
                <x-td>
                    <div class="flex gap-2">
                        <img class="size-16" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog image">
                        <section class="flex flex-col">
                            <span class="text-text-primary text-lg">Shiba Inu</span>
                            <span class="text-gray-500 text-xs font-light">Color: Yellow & White</span>
                            <span class="text-gray-500 text-xs font-light">Size: Large</span>
                        </section>
                    </div>
                </x-td>
                <x-td>
                    2 months
                </x-td>
                <x-td>
                    Male
                </x-td>
                <x-td>
                    $3,400.00
                </x-td>
                <x-td>
                    <button>
                        <x-bi-trash-fill class="text-text-primary size-5" />
                    </button>
                </x-td>
            </tr>
            <tr>
                <x-td>
                    <div class="flex gap-2">
                        <img class="size-16" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog image">
                        <section class="flex flex-col">
                            <span class="text-text-primary text-lg">Shiba Inu</span>
                            <span class="text-gray-500 text-xs font-light">Color: Yellow & White</span>
                            <span class="text-gray-500 text-xs font-light">Size: Large</span>
                        </section>
                    </div>
                </x-td>
                <x-td>
                    2 months
                </x-td>
                <x-td>
                    Male
                </x-td>
                <x-td>
                    $3,400.00
                </x-td>
                <x-td>
                    <button>
                        <x-bi-trash-fill class="text-text-primary size-5" />
                    </button>
                </x-td>
            </tr>
        </table>
    </div>
</div>