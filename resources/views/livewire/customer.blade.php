<div class="min-h-screen flex flex-col">
    <x-navigation />
    <div class="flex-1 flex lg:flex-row flex-col w-full">
        <nav class="bg-text-primary flex lg:flex-col lg:justify-start lg:w-60 lg:p-5 lg:min-h-full justify-center gap-5 p-3 w-full">
            <x-customer-nav-link wire:click="navigate('customer')">
                <x-bi-person-circle class="sm:size-5 size-3" /> My Profile
            </x-customer-nav-link>
            <x-customer-nav-link wire:click="navigate('my-purchase')">
                <x-bi-bag-fill class="sm:size-5 size-3" /> My Purchase
            </x-customer-nav-link>
        </nav>
        <div class="flex-1 p-3 max-h-full">
           {{ $slot }}
        </div>
    </div>
</div>