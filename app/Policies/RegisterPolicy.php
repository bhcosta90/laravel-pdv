<?php

declare(strict_types = 1);

namespace App\Policies;

use App\Models\{Enum\UserCan, User};
use Illuminate\Auth\Access\HandlesAuthorization;

class RegisterPolicy
{
    use HandlesAuthorization;

    public function pdv(User $user): bool
    {
        return $user->can(UserCan::Sale);
    }
}
