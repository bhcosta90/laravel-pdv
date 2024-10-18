<?php

declare(strict_types = 1);

namespace App\Livewire\Store\Register;

use App\Livewire\Trait\WithAlert;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SetRegister extends Component
{
    use WithAlert;

    public bool $open = false;

    public function render(): View
    {
        return view('livewire.store.register.set-register');
    }

    #[Computed]
    public function registers(): HasMany
    {
        return store()
            ->registers()
            ->orderBy('name');
    }

    public function submit(): void
    {
        $this->notificationSuccess('Caixa vinculado com sucesso na sua máquina');
        $this->reset();
    }
}
