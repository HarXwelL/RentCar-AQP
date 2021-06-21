<?php

namespace Database\Factories;

use App\Models\Auto;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Auto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'provider_id' => $this->faker->sentence(),
            'color' => $this->faker->sentence(),
            'capacity' => $this->faker->sentence(),
            'plate_no' => $this->faker->sentence(),
            'price' => $this->faker->sentence(),
        ];
    }
}
