<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
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
            'Heineken'. 'Lucky Me'
        ];

        return [
            'company_name' => fake()->randomElement($brand),
            'address' => fake() -> address(),
            'phone' => fake() ->phoneNumber(),
            'contact_person' => fake() ->name(),
        ];
    }
}
