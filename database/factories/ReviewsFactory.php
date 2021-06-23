<?php

namespace Database\Factories;

use App\Models\Reviews;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reviews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->sentence(),
            'rental_id' => $this->faker->sentence(),
            'qualification' => $this->faker->sentence(),
            'comment' => $this->faker->sentence(),
            'date' => $this->faker->sentence(),
        ];
    }
}