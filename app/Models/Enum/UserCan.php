<?php

declare(strict_types = 1);

namespace App\Models\Enum;

enum UserCan: int
{
    case Impersonate = 1;
    case Sale        = 2;
}
