<?php

declare(strict_types = 1);

namespace App\Livewire\Store\Register;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SetRegister extends Component
{
    public bool $open = false;

    public function render(): View
    {
        return view('livewire.store.register.set-register');
    }

    #[Computed]
    public function registers(): Collection
    {
        return store()
            ->registers()
            ->orderBy('name')
            ->get();
    }
}
