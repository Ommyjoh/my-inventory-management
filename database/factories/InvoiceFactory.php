<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'iNo' => 'INV'.'-'.$this->faker->numberBetween(1000,9999).'-'.time(),
            'customer_id' => $this->faker->numberBetween(1,10),
            'supplier_id' => $this->faker->numberBetween(1,10),
            'category_id' => $this->faker->numberBetween(1,10),
            'product_id' => $this->faker->numberBetween(1,10),
            'qty' => $this->faker->numberBetween(150,650),
            'discount' => $this->faker->numberBetween(1,10),
            'totalPrice' => $this->faker->numberBetween(100,500),
            'status' => $this->faker->randomElement(array('PENDING','APPROVED')),
        ];
    }
}
