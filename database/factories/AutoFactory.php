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
            'provider_id' => \App\Models\Provider::inRandomOrder()->first()->id,
            'color' => $this->faker->hexcolor(),
            'capacity' => $this->faker->randomElement(['3', '4', '5']),
            'plate_no' => $this->faker->bothify('?##-#??'),
            'price' => $this->faker->numberBetween($min = 50, $max = 150),
        ];
    }
}
