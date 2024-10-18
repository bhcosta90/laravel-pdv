<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Models\Register;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RegisterFactory extends Factory
{
    protected $model = Register::class;

    public function definition(): array
    {
        return [
            'name'       => 'REG-' . random_int(100000, 999999),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
