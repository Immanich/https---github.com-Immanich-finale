<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandises>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $brand = [
            'Nestle', 'Del Monte', 'San Miguel',
            'Heineken', 'Lucky Me'
        ];

        return [
            
            'brand' => fake()->randomElement($brand),
            'description' => implode(' ', fake()->sentences()),
            'retail_price' => fake() ->numberBetween(100.00, 200.00),
            'whole_sale_price' => fake() ->numberBetween(50.00, 150.00),
            'whole_sale_qty' => fake() ->numberBetween(1, 50),
            'qty_stock' => fake() ->numberBetween(1, 50),
        ];
    }
}
