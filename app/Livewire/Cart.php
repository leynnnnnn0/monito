<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $items;

    public function mount()
    {
        if (session()->has('cart_items')) {
            $this->items = session()->get('cart_items');
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
