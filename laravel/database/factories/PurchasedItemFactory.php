<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Merchandise;
use App\Models\Purchase;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchasedItem>
 */
class PurchasedItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //             $table->foreignId('merchandises_id')->references('id')->on('merchandises');
            // $table->foreignId('purchase_id')->references('id')->on('purchases');
            // $table->integer('whole_sale_qty');
            // $table->integer('purchase_price');
            'merchandise_id' => fake() -> randomElement(Merchandise::pluck('id')),
            'purchase_id' => fake() -> randomElement(Purchase::pluck('id')),
            'whole_sale_qty' => fake() -> numberBetween(1, 50),
            'purchase_price' => fake() -> numberBetween(100.00, 90000.00),
        ];
    }
}
