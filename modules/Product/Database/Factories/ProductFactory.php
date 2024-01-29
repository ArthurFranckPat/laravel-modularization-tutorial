<?php

namespace Modules\Product\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Product\Models\Product;

///**
// * @extends Factory<Product>
// */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2),
            'stock' => $this->faker->numberBetween(1,1000)
        ];
    }
}
