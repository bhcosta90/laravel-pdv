<?php

declare(strict_types = 1);

use App\Livewire;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('counter', Livewire\Counter::class);
