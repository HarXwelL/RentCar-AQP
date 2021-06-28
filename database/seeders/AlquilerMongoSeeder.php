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
    protected $connection = 'mongodb';


    public function run()
    {
        AlquilerMongo::connection('mongodb')->factory(10)->create();
    }
}
