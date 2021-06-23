<?php

namespace Database\Factories;

use App\Models\Reviews;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewsFactory extends Factory
{
    protected $model = Reviews::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'rental_id' => \App\Models\Rental::inRandomOrder()->first()->id,
            'qualification' => $this->faker->numberBetween($min = 1, $max = 5),
            'comment' => $this->faker->sentence(),
            'date' => $this->faker->date($format = 'Y-m-d'),
        ];
    }
}
