<nav class="flex items-center justify-between h-16 bg-tranparent p-5">
    <img class="size-[80px]" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
    <!-- Menu icon for mobile view -->
    <x-ionicon-menu class="md:hidden size-8" />
    <section class="flex items-center gap-3">
        <x-nav-link>Home</x-nav-link>
        <x-nav-link>Category</x-nav-link>
        <x-nav-link>About</x-nav-link>
        <x-nav-link>Contact</x-nav-link>
    </section>
    <section class="space-x-2">
        <a class="text-text-primary font-bold">Register </a>
        <a class="px-4 py-1 text-white bg-primary-gradient font-bold">Login</a>
    </section>
</nav>