<?php

namespace App\Livewire\Category;

use App\Models\Pet;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class Show extends Component
{
    use WireToast;
    public $items;
    public $pet;

    public function mount($id)
    {
        $this->pet = Pet::with('pricingAvailability', 'additionalInfo', 'health', 'images')->findOrFail($id);
    }

    public function addToCart($itemId)
    {
        $this->items = session('cart_items', []);
        $this->items[] = $itemId;

        // Update the session
        session(['cart_items' => $this->items]);
        toast()
            ->success('Added Successfully!')
            ->push();
    }

    public function render()
    {
        return view('livewire.category.show', [
            'data' => Pet::with('pricingAvailability', 'images')->paginate(10)
        ]);
    }
}
