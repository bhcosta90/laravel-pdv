<?php

use App\Livewire\Counter;
use function Pest\Livewire\livewire;

test('counter component can increment and decrement', function () {
    livewire(Counter::class)
        ->call('increment')
        ->assertSet('count', 2)
        ->call('decrement')
        ->assertSet('count', 1);
});
