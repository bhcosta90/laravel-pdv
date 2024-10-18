<?php

declare(strict_types = 1);

namespace App\Models;

use App\Models\Casts\ValueCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class OrderProduct extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'sell_price',
        'quantity',
    ];

    protected $casts = [
        'sell_price' => ValueCast::class,
    ];
}
