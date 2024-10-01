@props(['breed' => 'Pomeranian White', 'gender' => 'Male', 'price' => '90400', 'source' => 'test', 'id' => null])
<a href="/category/show/{{ $id }}" class="cursor-pointer bg white w-auto h-54 p-2 shadow-sm space-y-3 rounded-lg" wire:navigate>
    <img class="h-32" src="{{ asset('storage/' . $source)}}" alt="pet">
    <div class="flex flex-col">
        <h1 class="text-sm font-semibold">{{ $breed}}</h1>
        <span class="text-gray-400 text-xs">Gender: <span class="text-gray-600 text-xs">{{ $gender}}</span></span>
        <span class="text-gray-400 text-xs">Age: <span class="text-gray-600 text-xs">2 months</span></span>
        <h1 class="mt-2 font-bold">${{ Number::format($price, 2)}}</h1>
    </div>
</a>