<?php

namespace Database\Factories;

use App\Models\Campaign;
use App\Models\Group;
use App\Models\GroupCampaign;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupCollection>
 */
class GroupCampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = GroupCampaign::class;

    public function definition(): array
    {
        return [
            'group_id' => Group::inRandomOrder()->first()->id,
            'campaign_id' => Campaign::inRandomOrder()->first()->id,

        ];
    }
}
