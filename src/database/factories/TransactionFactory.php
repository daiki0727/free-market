<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Item;
use App\Models\Status;
use App\Models\PaymentMethod;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'buyer_id' => User::inRandomOrder()->first()->id,
            'seller_id' => User::inRandomOrder()->first()->id,
            'item_id' => Item::inRandomOrder()->first()->id,
            'status_id' => Status::inRandomOrder()->first()->id, 
            'payment_method_id' => PaymentMethod::inRandomOrder()->first()->id, 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
