<?php

declare(strict_types = 1);

namespace App\Livewire\Store\Pdv;

use App\Actions\Register\BrowserRegister;
use App\Models\Register;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Attributes\{Computed, Layout, On};
use Livewire\Component;

#[Layout('components.layouts.blank')]
class PdvIndex extends Component
{
    use AuthorizesRequests;

    public ?Register $register;

    public ?int $statusRegister = 0;

    public function mount(BrowserRegister $register): void
    {
        $this->register = $register->handle();
        $this->authorize('pdv', Register::class);
    }

    public function render(): View
    {
        return view('livewire.store.pdv.pdv-index');
    }

    #[On('register::set')]
    #[Computed]
    public function validateExistRegister(?Register $register = null): ?int
    {
        if ($register) {
            $this->register = $register;
        }

        if (blank($this->register)) {
            return 1;
        }

        if (!$this->register->opened_by) {
            return 2;
        }

        return null;
    }

    #[Computed]
    public function totalItens(): int
    {
        return 0;
    }

    #[Computed]
    public function disableButton(): int
    {
        return 0;
    }
}
