<?php

declare(strict_types = 1);

namespace App\Livewire\Store\Pdv;

use App\Actions\Register\BrowserRegister;
use App\Models\Register;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.blank')]
class PdvIndex extends Component
{
    use AuthorizesRequests;

    public ?Register $register;

    public function mount(BrowserRegister $register): void
    {
        $this->register = $register->handle();
        $this->authorize('pdv', Register::class);
    }

    public function render(): View
    {
        return view('livewire.store.pdv.pdv-index');
    }
}
