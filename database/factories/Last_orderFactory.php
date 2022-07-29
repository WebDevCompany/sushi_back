<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Last_order>
 */
class Last_orderFactory extends Factory
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
            'prise' => $this->faker->numberBetween(0, 99999),
            'number' =>  $this->faker->numberBetween(0, 999),
            'order_time' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'time_to_get_order' => $this->faker->dateTime($max = 'now', $timezone = null),
            'address' => $this->faker->streetAddress,
            'courier_or_pickup' => $this->faker->randomElement($array = array ('courier','pickup')),
            'promo_code' => $this->faker->text($maxNbChars = 30),
        ];
    }
}
