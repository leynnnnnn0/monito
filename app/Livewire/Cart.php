<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;

class Cart extends Component
{
    public $items;
    public $data;

    public function mount()
    {
        $this->items = session('cart_items', []);
        $this->data = Pet::with('pricingAvailability', 'images')->whereIn('id', $this->items)->get();
    }

    public function render()
    {
        return view('livewire.cart');
    }

    public function removeItem($itemId)
    {
        $this->items = array_values(array_diff($this->items, [$itemId]));
        session(['cart_items' => $this->items]);
        $this->data = Pet::with('pricingAvailability', 'images')->whereIn('id', $this->items)->get();
    }
}
