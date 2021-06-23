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
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'auto_id' => \App\Models\Auto::inRandomOrder()->first()->id,
            'payment_type' => $this->faker->randomElement(['cash', 'card', 'payPal']),
            'start_date' => $this->faker->date($format = 'Y-m-d'),
        ];
    }
}
