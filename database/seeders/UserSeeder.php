<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(1)
        ->state([
            "user_type" => "administrador",
            "email" => "administrador@gmail.com"])
        ->create();

        User::factory()->count(10)->create();
    }
}
