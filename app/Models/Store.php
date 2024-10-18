<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Store extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function registers(): HasMany
    {
        return $this->hasMany(Register::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
