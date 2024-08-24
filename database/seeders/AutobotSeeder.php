<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autobot;

class AutobotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Autobot::factory()
            ->count(500)
            ->hasPosts(10)
            ->create();
    }
}
