<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            GroupSeeder::class,
            ParticipantSeeder::class,
            CampaignSeeder::class,
            GroupCampaignSeeder::class,
            PaymentMethodSeeder::class,
            ContributionSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
