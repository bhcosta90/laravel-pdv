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

    public ?int $register = null;

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

    public function submit(\App\Actions\Register\SetRegister $setRegister): void
    {
        $setRegister->handle([
            'register' => $this->register,
            'user'     => user()->id,
            'store'    => store()->id,
        ]);
        $this->notificationSuccess('Caixa vinculado com sucesso na sua máquina');
        $this->dispatch('register::set', $this->register);
        $this->reset();
    }
}
