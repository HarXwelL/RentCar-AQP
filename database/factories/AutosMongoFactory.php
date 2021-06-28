<?php

namespace Database\Factories;

use App\Models\AutosMongo;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutosMongoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AutosMongo::class;

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
