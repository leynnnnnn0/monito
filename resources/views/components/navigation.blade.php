<nav class="flex items-center justify-between bg-tranparent p-5 2xl:px-80 lg:px-24 md:h-24 h-16">
    <img class="size-[80px]" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
    <!-- Menu icon for mobile view -->
    <x-ionicon-menu class="md:hidden size-8" />
    <section class="md:flex items-center gap-3 hidden">
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/category">Category</x-nav-link>
        <x-nav-link>About</x-nav-link>
        <x-nav-link>Contact</x-nav-link>
    </section>
    <section class="space-x-2 md:block hidden">
        <a class="text-text-primary font-bold">Register</a>
        <a class="px-4 py-1 text-white bg-text-primary font-bold rounded-full">Login</a>
    </section>
</nav>