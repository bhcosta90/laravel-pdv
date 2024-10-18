<?php

declare(strict_types = 1);

use App\Models\{Store, User};

function store(): Store
{
    return auth()->user()->store;
}

function user(): User
{
    return auth()->user();
}
