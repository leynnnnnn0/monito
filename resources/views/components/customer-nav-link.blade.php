<a {{ $attributes->merge(['class' => 'cursor-pointer flex items-center gap-2 text-white lg:text-lg lg:font-bold sm:text-sm text-xs'])}} wire:navigate>
    {{ $slot }}
</a>