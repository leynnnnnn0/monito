<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\Customer\MyProfile;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('auth:customer')->group(function () {
    Volt::route('verify-email', 'pages.auth.verify-email')
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Volt::route('confirm-password', 'pages.auth.confirm-password')
        ->name('password.confirm');

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::get('/customer', MyProfile::class)->name('customer');
});
