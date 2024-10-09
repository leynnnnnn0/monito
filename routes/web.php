<?php

use App\Livewire\Cart;
use App\Livewire\Category;
use App\Livewire\Category\Show;
use App\Livewire\Customer;
use App\Livewire\Customer\MyProfile;
use App\Livewire\Customer\MyPurchase;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', HomePage::class)->name('home-page');
Route::get('/category', Category::class)->name('category');
Route::get('/category/show/{id}', Show::class)->name('category.show');
Route::get('/my-cart', Cart::class)->name('my-cart');
Route::get('/my-purchase', MyPurchase::class)->name('my-purchase');

Route::middleware('guest')->group(function () {
    Volt::route('register', 'pages.auth.register')
        ->name('register');

    Volt::route('login', 'pages.auth.login')
        ->name('login');

    Volt::route('forgot-password', 'pages.auth.forgot-password')
        ->name('password.request');

    Volt::route('reset-password/{token}', 'pages.auth.reset-password')
        ->name('password.reset');
});


// Only what's for logged-in users
require __DIR__ . '/auth.php';
