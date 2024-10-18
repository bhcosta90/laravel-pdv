<?php

declare(strict_types = 1);

namespace App\Policies;

use App\Models\{Register, User};
use Illuminate\Auth\Access\HandlesAuthorization;

class RegisterPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Register $register): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Register $register): bool
    {
    }

    public function delete(User $user, Register $register): bool
    {
    }

    public function restore(User $user, Register $register): bool
    {
    }

    public function forceDelete(User $user, Register $register): bool
    {
    }
}
