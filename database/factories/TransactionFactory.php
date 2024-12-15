<?php

namespace Database\Factories;

use App\Enums\TransactionStatus;
use App\Models\Contribution;
use App\Models\PaymentMethod;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Transaction::class;

    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(2, 100, 1000),
            'payment_method_id' => PaymentMethod::inRandomOrder()->first()->id,
            'contribution_id' => Contribution::inRandomOrder()->first()->id,
            'transaction_date' => $this->faker->date(),
            'transaction_time' => $this->faker->time(),
            'payment_ref' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'transaction_code' => $this->faker->randomNumber(6),
            'receipt_number' => $this->faker->randomNumber(8),
            'status' => $this->faker->randomElement(array_keys(TransactionStatus::getElements())),
            'payment_response' => json_encode(['status' => 'success', 'message' => 'Transaction completed']),
        ];
    }
}
