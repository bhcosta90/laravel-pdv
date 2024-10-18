<?php

declare(strict_types = 1);

use App\Models\Store;

function store(): Store
{
    return auth()->user()->store;
}
