<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Provider::factory(10)->create();
    }
}
