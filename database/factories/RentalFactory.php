<?php

namespace Database\Factories;

use App\Models\Rental;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rental::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->sentence(),
            'auto_id' => $this->faker->sentence(),
            'payment_type' => $this->faker->sentence(),
            'start_date' => $this->faker->sentence(),
            'end_date' => $this->faker->sentence(),
        ];
    }
}
