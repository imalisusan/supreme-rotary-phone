<?php

namespace Database\Factories;

use App\Enums\TransactionStatus;
use App\Models\Contribution;
use App\Models\Participant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contribution>
 */
class ContributionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Contribution::class;

    public function definition(): array
    {
        $participant = Participant::inRandomOrder()->first();

        return [
            'participant_id' => $participant->id,
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'status' => $this->faker->randomElement(array_keys(TransactionStatus::getElements())),
            'transaction_reference' => $this->faker->uuid,
            'payment_details' => $this->faker->randomElements(['payment_method' => 'credit_card', 'transaction_id' => $this->faker->uuid]),
        ];
    }
}
