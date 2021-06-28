<?php

namespace Database\Factories;

use App\Models\AlquilerMongo;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlquilerMongoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AlquilerMongo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
