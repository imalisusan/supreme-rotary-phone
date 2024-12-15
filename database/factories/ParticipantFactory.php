<?php

namespace Database\Factories;

use App\Enums\ParticipantType;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'participant_type' => $this->faker->randomElement(ParticipantType::getElements()),
            'group_id' => Group::pluck('id')->random(),
            'user_id' => User::pluck('id')->random(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
