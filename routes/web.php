<?php

use App\Livewire\Category;
use App\Livewire\Category\Show;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home-page');
Route::get('/category', Category::class)->name('category');
Route::get('/category/show/{id}', Show::class)->name('category.show');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
