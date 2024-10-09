<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function logout()
    {
        Auth::guard('customer')->logout();

        // Invalidate the session and regenerate the CSRF token (optional)
        session()->invalidate();
        session()->regenerateToken();

        // Redirect to the login page or home page after logging out
        return redirect()->to('/login');
    }

    public function render()
    {
        return view('livewire.logout');
    }
}
