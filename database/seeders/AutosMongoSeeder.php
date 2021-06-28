<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AutosMongo;

class AutosMongoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AutosMongo::factory(10)->create();
    }
}
