<?php

declare(strict_types = 1);

namespace App\Models;

use App\Models\Cast\ValueCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Order extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'total',
        'sub_total',
        'discount_value',
        'discount_price',
        'register_id',
        'user_id',
        'change_due',
        'change_tendered',
    ];

    protected $casts = [
        'total'           => ValueCast::class,
        'sub_total'       => ValueCast::class,
        'discount_price'  => ValueCast::class,
        'change_due'      => ValueCast::class,
        'change_tendered' => ValueCast::class,
    ];

    public function products(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }
}
