<?php

namespace Database\Seeders;

use App\Models\Offers;
use Illuminate\Database\Seeder;

class OffersSeeder extends Seeder
{
    public function run()
    {
        Offers::factory()->count(10)->create();
    }
}
