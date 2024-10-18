<?php

declare(strict_types = 1);

namespace App\Models\Enum;

enum UserRole: int
{
    case Owner       = 1;
    case Manager     = 2;
    case Employee    = 3;
    case Salesperson = 4;
}
