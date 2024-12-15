<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\GroupPaymentMethod;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupPaymentMethod>
 */
class GroupPaymentMethodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = GroupPaymentMethod::class;

    public function definition(): array
    {
        return [
            'group_id' => Group::inRandomOrder()->first()->id,
            'payment_method_id' => PaymentMethod::inRandomOrder()->first()->id,

        ];
    }
}
