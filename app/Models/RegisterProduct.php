<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class RegisterProduct extends Model
{
    use SoftDeletes;
    use HasFactory;
}
