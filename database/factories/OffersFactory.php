<?php

namespace Database\Factories;

use App\Models\Offers;
use Illuminate\Database\Eloquent\Factories\Factory;

class OffersFactory extends Factory
{
    protected $model = Offers::class;

    public function definition()
    {
        return [
            'provider_id' => \App\Models\Provider::inRandomOrder()->first()->id,
            'offer_name' => $this->faker->word,
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'discount' => $this->faker->numberBetween($min = 10, $max = 90),
        ];
    }
}
