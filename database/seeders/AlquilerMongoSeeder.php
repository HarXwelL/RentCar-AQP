<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AlquilerMongo;

class AlquilerMongoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlquilerMongo::factory(10)->create();
    }
}
