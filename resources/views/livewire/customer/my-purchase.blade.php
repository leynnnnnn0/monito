<div>
    <!-- Tab -->
    <div class="w-full flex items-center justify-center md:h-24">
        <div class="h-fit p-3 rounded-lg bg-black/5 shadow-lg space-x-2">
            <x-tab-option :active="true">
                All
            </x-tab-option>
            <x-tab-option :active="false">
                To pay
            </x-tab-option>
            <x-tab-option :active="false">
                To receive
            </x-tab-option>
            <x-tab-option :active="false">
                Completed
            </x-tab-option>
            <x-tab-option :active="false">
                Cancelled
            </x-tab-option>
        </div>
    </div>
    <!-- Items -->
    <div class="mx-auto max-w-[1000px] space-y-3">
        <div class="flex flex-col gap-2 rounded-lg shadow-lg p-3 h-fit">
            <section class="flex items-center justify-between border-b border-gray-300 h-fit ">
                <x-logo class="size-16" />
                <span class="text-green-500">Order Delivered</span>
            </section>

            <section class="flex items-center justify-between border-b border-gray-300">
                <div class="flex items-center gap-2">
                    <img class="sm:size-16 size-8" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog image">
                    <section class="flex flex-col py-4">
                        <span class="text-text-primary text-lg font-bold">Shiba Inu </span>
                        <span class="text-gray-500 text-xs font-light">Color: Yellow & White</span>
                        <span class="text-gray-500 text-xs font-light">Size: small</span>
                        <span class="text-xs font-light">x1</span>
                    </section>
                </div>
                <span class="text-text-primary font-bold">$7,800.00</span>
            </section>

            <section class="flex items-center justify-end py-2">
                <span class="text-gray-900 font-light">Order Total: <span class="text-text-primary text-lg font-bold">$7,800.00</span></span>
            </section>
        </div>
        <div class="flex flex-col gap-2 rounded-lg shadow-lg p-3 h-fit">
            <section class="flex items-center justify-between border-b border-gray-300 h-fit ">
                <x-logo class="size-16" />
                <span class="text-green-500">Order Delivered</span>
            </section>

            <section class="flex items-center justify-between border-b border-gray-300">
                <div class="flex items-center gap-2">
                    <img class="sm:size-16 size-8" src="{{ Vite::asset('resources/images/shiba.png')}}" alt="dog image">
                    <section class="flex flex-col py-4">
                        <span class="text-text-primary text-lg font-bold">Shiba Inu </span>
                        <span class="text-gray-500 text-xs font-light">Color: Yellow & White</span>
                        <span class="text-gray-500 text-xs font-light">Size: small</span>
                        <span class="text-xs font-light">x1</span>
                    </section>
                </div>
                <span class="text-text-primary font-bold">$7,800.00</span>
            </section>

            <section class="flex items-center justify-end py-2">
                <span class="text-gray-900 font-light">Order Total: <span class="text-text-primary text-lg font-bold">$7,800.00</span></span>
            </section>
        </div>
    </div>




</div>