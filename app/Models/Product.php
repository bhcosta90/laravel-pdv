<?php

declare(strict_types = 1);

namespace App\Models;

use App\Models\Casts\ValueCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $casts = [
        'sell_price' => ValueCast::class,
        'cash_buy'   => ValueCast::class,
        'quantity'   => ValueCast::class,
    ];
}
