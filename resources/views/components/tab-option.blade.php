@props(['active' => false])
<button {{ $attributes->class([ 
    'px-2 py-1 rounded-lg font-bold text-normal text-text-primary md:px-4 sm:text-sm text-[10px]', 
    'bg-white shadow-lg' => $active
    ])}}>
    {{ $slot }}
</button>
