<?php

namespace App\Livewire\Category;

use App\Models\Pet;
use Livewire\Component;

class Show extends Component
{
    public $pet;

    public function mount($id)
    {
        $this->pet = Pet::with('pricingAvailability', 'additionalInfo', 'health', 'images')->findOrFail($id);
    }
    public function render()
    {
        return view('livewire.category.show', [
            'data' => Pet::with('pricingAvailability', 'images')->paginate(10)
        ]);
    }
}
