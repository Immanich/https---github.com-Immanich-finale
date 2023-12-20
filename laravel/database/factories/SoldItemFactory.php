<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Merchandise;
use App\Models\Sale;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SoldItem>
 */
class SoldItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //             $table->foreignId('merchandise_id')->references('id')->on('merchandises');
            // $table->foreignId('sale_id')->references('id')->on('sales');
            // $table->integer('qty');
            // $table->decimal('selling_price', 10, 2);
            'merchandise_id' => fake() -> randomElement(Merchandise::pluck('id')),
            'sale_id' => fake() -> randomElement(Sale::pluck('id')),
            'qty' => fake() -> numberBetween(1, 50),
            'selling_price' => fake() -> numberBetween(100.00, 3000.00),
        ];
    }
}
