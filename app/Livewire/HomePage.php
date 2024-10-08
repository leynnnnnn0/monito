<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;

class HomePage extends Component
{
    public $data;
    public function mount()
    {
        $this->data = Pet::with('pricingAvailability', 'images')->take(10)->get();
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
