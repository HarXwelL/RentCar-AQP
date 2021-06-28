<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        
        $this->call([
            UserSeeder::class,
            ProviderSeeder::class,
            AutoSeeder::class,
            OffersSeeder::class,
            RentalSeeder::class,
            ReviewsSeeder::class,
            AlquilerMongoSeeder::class,
            AutosMongoSeeder::class,
        ]);
    }
}
