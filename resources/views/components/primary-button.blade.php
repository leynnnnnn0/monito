<a {{ $attributes->merge(['class' => 'hover:bg-opacity-50 transition-colors duration-300 cursor-pointer px-4 py-1 text-white bg-text-primary font-bold rounded-full'])}} wire:navigate>
    {{ $slot }}
</a>