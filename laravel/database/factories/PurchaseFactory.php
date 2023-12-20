<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Supplier;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //             $table->date('date');
            // $table->foreignId('supplier_id')->references('id')->on('suppliers');
            // $table->integer('total');
            // $table->integer('invoice_no');
            // $table->foreignId('user_id')->references('id')->on('users');
            'date' => fake() -> date(),
            'supplier_id' => fake() -> randomElement(Supplier::pluck('id')),
            'total' => fake() -> numberBetween(1000.00, 900000.00),
            'invoice_no' => fake() -> numerify(),
            'user_id' => fake() -> randomElement(User::pluck('id')),
        ];
    }
}
