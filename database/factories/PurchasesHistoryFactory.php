<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchasesHistory>
 */
class PurchasesHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $products = '';
        for ($i = 0; $i < 3; $i++) {
            if ($i != 2) {
                $products = $products . $this->faker->numberBetween(0, 99) . ', ';
            } else $products = $products . $this->faker->numberBetween(0, 99);
        }
        return [
            'name' => $this->faker->name(),
            'products' => $products,
            'order_status' => $this->faker->randomElement($array = array ('arranged', 'processed', 'delivered')), // оформлен, в обработке, доставлен
            'discount' => $this->faker->randomElement($array = array ($this->faker->sentence($nbWords = 5, $variableNbWords = true), 'false')),
            'total_order_value' => $this->faker->numberBetween(0, 99999),
            'status' =>  $this->faker->numberBetween(0, 99),
        ];
    }
}
