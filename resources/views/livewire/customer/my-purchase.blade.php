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
        <x-order-container />
        <x-order-container />
        <x-order-container />
    </div>




</div>