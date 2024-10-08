<?php

namespace App\Livewire;

use Livewire\Component;

class Customer extends Component
{
    public $request;

    public function mount()
    {
        $this->request = 'customer';
    }
    public function render()
    {
        return view('livewire.customer');
    }

    public function navigate($location)
    {
        $this->request = $location;
    }
}
