<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kategori_id' => mt_rand(1,3),
            'tahun_keluaran' => fake()->year('+5 years'),
            'warna' => fake()->safeColorName(),
            'harga' => fake()->randomNumber(5, true)
        ];
    }
}
