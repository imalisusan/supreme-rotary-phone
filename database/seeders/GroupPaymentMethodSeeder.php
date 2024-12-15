<?php

namespace Database\Seeders;

use App\Models\GroupPaymentMethod;
use Illuminate\Database\Seeder;

class GroupPaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroupPaymentMethod::factory()->count(5)->create();
    }
}
