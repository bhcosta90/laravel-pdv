<?php

declare(strict_types = 1);

namespace App\Livewire\Trait;

use Livewire\Features\SupportEvents\HandlesEvents;

trait WithAlert
{
    use HandlesEvents;

    protected function notificationSuccess(string $message): void
    {
        $this->notification($message, 'success');
    }

    protected function notification(string $message, string $status): void
    {
        $this->dispatch('notification::alerts', ...compact('message', 'status') + [
            'type' => 'toast',
        ]);
    }
}
