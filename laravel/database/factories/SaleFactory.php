<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //             $table->foreignId('customer_id')->references('id')->on('customers');
            // $table->date('date');
            // $table->boolean('is_credit');
            // $table->foreignId('user_id')->references('id')->on('users');
            'customer_id' => fake() -> randomElement(Customer::pluck('id')),
            'date' => fake() -> date(),
            'is_credit' => fake() -> boolean,
            'user_id' => fake() -> randomElement(User::pluck('id')),

        ];
    }
}
