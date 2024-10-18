<?php

declare(strict_types = 1);

namespace App\Providers;

use App\Models\Enum\UserCan;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->registerGates();
    }

    protected function registerGates(): void
    {
        foreach (UserCan::cases() as $can) {
            \Gate::define((string) $can->value, function (User $user) use ($can) {
                if ($user->role) {
                    return in_array($can, $user->role->permissions(), true);
                }
            });
        }
    }
}
