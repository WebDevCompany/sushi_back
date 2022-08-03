<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reviews>
 */
class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_author' => $this->faker->name(),
            'text_review' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'id_product' => $this->faker->unique()->numberBetween(12, 100),
            'id_status' => $this->faker->boolean($chanceOfGettingTrue = 50),
        ];
    }
}
