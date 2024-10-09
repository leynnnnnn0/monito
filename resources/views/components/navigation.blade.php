<nav {{ $attributes->merge(['class' => 'shadow-lg flex items-center justify-between bg-tranparent p-5 2xl:px-80 lg:px-24 md:h-24 h-16'])}}>
    <img class="size-[80px]" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
    <!-- Menu icon for mobile view -->
    <x-ionicon-menu class="md:hidden size-8" />
    <section class="md:flex items-center gap-3 hidden">
        <x-nav-link :active="request()->is('/')" href="/">Home</x-nav-link>
        <x-nav-link :active="request()->is('category')" href="/category">Category</x-nav-link>
        <x-nav-link :active="request()->is('about')">About</x-nav-link>
        <x-nav-link :active="request()->is('contact')">Contact</x-nav-link>
        @if(auth('customer')->check()) <x-nav-link :active="request()->is('customer')" href="/customer">My Account</x-nav-link> @endif
    </section>
    <section class="items-center gap-2 md:flex hidden">
        <x-nav-link href="/my-cart">
            <x-bi-cart-fill class="text-text-primary font-bold mr-4" />
        </x-nav-link>
        @if(auth('customer')->check())
            @livewire('logout')
        @else
        <a  href="/register" class="text-text-primary font-bold">Register</a>
        <x-primary-button href="/login">Login</x-primary-button>
        @endif
    </section>
</nav>
