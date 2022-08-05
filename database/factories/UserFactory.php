<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'city' => $this->faker->city(),
            'phone' => $this->faker->tollFreePhoneNumber,
            'reviews' =>$this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'number_of_visits' => $this->faker->numberBetween(0, 999),
            'number_of_paid_orders' => $this->faker->numberBetween(0, 999),
            'promo_code' => $this->faker->text($maxNbChars = 200),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
