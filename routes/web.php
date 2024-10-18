<?php

declare(strict_types = 1);

use App\Livewire;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('pdv', Livewire\Store\Pdv\PdvIndex::class);
});

include __DIR__ . '/auth.php';
