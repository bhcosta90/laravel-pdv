<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $cashBuy   = $this->faker->numberBetween(100, 5000) / 100;
        $sellPrice = $cashBuy * 1.75;

        return [
            'title'       => $this->faker->sentence(3),
            'description' => $this->faker->text(),
            'sell_price'  => $sellPrice,
            'cash_buy'    => $cashBuy,
            'quantity'    => $this->faker->numberBetween(10, 30),
            'ean'         => $this->faker->ean13(),
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ];
    }
}
