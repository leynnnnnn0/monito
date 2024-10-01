<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;

class Category extends Component
{
    public $data;
    public function mount()
    {
        $this->data = Pet::with('pricingAvailability', 'images')->get();
    }
    public function render()
    {
        return view('livewire.category');
    }
}
