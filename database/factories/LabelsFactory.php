<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Labels>
 */
class LabelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'text_label' => $this->faker->realText($maxNbChars = 30, $indexSize = 2),
            'color_label' => $this->faker->hexcolor(),
        ];
    }
}
