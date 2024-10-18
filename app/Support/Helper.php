<?php

declare(strict_types = 1);

use App\Models\{Store, User};

function store(): Store
{
    static $store = null;

    if ($store === null) {
        $store = auth()->user()->store;
    }

    return $store;
}

function user(): User
{
    static $user = null;

    if ($user === null) {
        $user = auth()->user();
    }

    return $user;
}
