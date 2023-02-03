<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => mt_rand(1,3),
            'order_id' => mt_rand(1,5),
            'qty' => fake()->randomDigit(),
            'total_harga' => fake()->randomNumber(5, true)
        ];
    }
}
