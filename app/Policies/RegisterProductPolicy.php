<?php

declare(strict_types = 1);

namespace App\Policies;

use App\Models\{RegisterProduct, User};
use Illuminate\Auth\Access\HandlesAuthorization;

class RegisterProductPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, RegisterProduct $registerProduct): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, RegisterProduct $registerProduct): bool
    {
    }

    public function delete(User $user, RegisterProduct $registerProduct): bool
    {
    }

    public function restore(User $user, RegisterProduct $registerProduct): bool
    {
    }

    public function forceDelete(User $user, RegisterProduct $registerProduct): bool
    {
    }
}
