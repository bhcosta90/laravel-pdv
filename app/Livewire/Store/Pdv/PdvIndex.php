<?php

declare(strict_types = 1);

namespace App\Livewire\Store\Pdv;

use App\Actions\Register\BrowserRegister;
use App\Models\Register;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.blank')]
class PdvIndex extends Component
{
    public ?Register $register;

    public function mount(BrowserRegister $register): void
    {
        $this->register = $register->handle();
    }

    public function render(): View
    {
        return view('livewire.store.pdv.pdv-index');
    }
}
