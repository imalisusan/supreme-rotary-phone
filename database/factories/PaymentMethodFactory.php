<?php

namespace Database\Factories;

use App\Enums\PaymentMethodStatus;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentMethod>
 */
class PaymentMethodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PaymentMethod::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'is_active' => $this->faker->randomElement([PaymentMethodStatus::ACTIVE, PaymentMethodStatus::INACTIVE]),
        ];
    }
}
