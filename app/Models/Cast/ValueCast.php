<?php

declare(strict_types = 1);

namespace App\Models\Cast;

use App\Facades\BcMath;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class ValueCast implements CastsAttributes
{
    public function get(Model $model, string $key, $value, array $attributes): ?float
    {
        return is_null($value)
            ? null
            : BcMath::make($value)->div(100)->toFloat();
    }

    public function set(Model $model, string $key, $value, array $attributes): ?int
    {
        return is_null($value)
            ? null
            : BcMath::make($value)->mul(100)->toInt();
    }
}
