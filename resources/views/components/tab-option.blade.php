@props(['active' => false])
<button {{ $attributes->class([ 
    'px-4 py-1 rounded-lg font-bold text-normal text-text-primary', 
    'bg-white shadow-lg' => $active
    ])}}>
    {{ $slot }}
</button>