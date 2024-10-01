<?php

namespace App\Livewire\Category;

use App\Models\Pet;
use Livewire\Component;

class Show extends Component
{
    public $items;
    public $pet;

    public function mount($id)
    {
        $this->pet = Pet::with('pricingAvailability', 'additionalInfo', 'health', 'images')->findOrFail($id);
    }

    public function addToCart($itemId)
    {
        // if 
        $this->items[] = $itemId;
        if (!session()->has('cart_items')) {
            session()->put('cart_items', $this->items);
        } else {
            session()->put('cart_items', $this->items);
        }
        dd(session()->get('cart_items'));
    }

    public function render()
    {
        return view('livewire.category.show', [
            'data' => Pet::with('pricingAvailability', 'images')->paginate(10)
        ]);
    }
}
