<?php

declare(strict_types = 1);

namespace App\Actions\Register;

use App\Policies\RegisterPolicy;

class BrowserRegister
{
    public function handle(): ?RegisterPolicy
    {
        return null;
    }
}
