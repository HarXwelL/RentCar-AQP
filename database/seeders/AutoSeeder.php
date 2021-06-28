<?php

namespace Database\Seeders;

use App\Models\Auto;
use Illuminate\Database\Seeder;

class AutoSeeder extends Seeder
{
    public function run()
    {
        Auto::factory()->count(100)->create();
    }
}
