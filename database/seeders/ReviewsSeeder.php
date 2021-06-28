<?php

namespace Database\Seeders;

use App\Models\Reviews;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    public function run()
    {
        Reviews::factory()->count(100)->create();
    }
}
