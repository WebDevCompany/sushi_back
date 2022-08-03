<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->word(),
            'description' => $this->faker->text($maxNbChars = 30),
            'prise' => $this->faker->numberBetween(0, 99999),
            'weight' =>  $this->faker->numberBetween(0, 9999),
            'compound' => $this->faker->text($maxNbChars = 200),
            'number_of_pieces' => $this->faker->numberBetween(0, 99),
            'access_to_order' => $this->faker->numberBetween(0, 99),
            'recommended_product_id' => $this->faker->numberBetween(0, 99),
        ];
    }
}
