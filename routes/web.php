<?php

use App\Livewire\Cart;
use App\Livewire\Category;
use App\Livewire\Category\Show;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home-page');
Route::get('/category', Category::class)->name('category');
Route::get('/category/show/{id}', Show::class)->name('category.show');
Route::get('/my-cart', Cart::class)->name('my-cart');


// Only what's for logged-in users
require __DIR__ . '/auth.php';
