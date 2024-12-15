<?php

namespace Database\Seeders;

use App\Models\GroupCampaign;
use Illuminate\Database\Seeder;

class GroupCampaignSeeder extends Seeder
{
    protected $model = GroupCampaign::class;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroupCampaign::factory()->count(5)->create();
    }
}
