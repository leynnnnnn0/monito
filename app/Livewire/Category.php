<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.category', [
            'data' => Pet::with('pricingAvailability', 'images')->paginate(10)
        ]);
    }
}
