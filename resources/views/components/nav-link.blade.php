@props(['active' => false])
<a {{ $attributes->class([
    'cursor-pointer text-sm font-bold text-text-primary',
    'underline decoration-text-primary decoration-2' => $active,
    'hover:text-blue-700 duration-300' => !$active,
]) }}
    wire:navigate>
    {{ $slot }}
</a>