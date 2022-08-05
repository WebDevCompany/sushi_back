<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'image_path' => $this->faker->imageUrl(),
            'title' =>  $this->faker->word(),
            'description' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'category_description' => $this->faker->realText($maxNbChars = 40, $indexSize = 2), //описание категории
            'condition' => $this->faker->boolean($chanceOfGettingTrue = 50), //состояние
            'id_label' => $this->faker->unique()->numberBetween(12, 100),
        ];
    }
}
