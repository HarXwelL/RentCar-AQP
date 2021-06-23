<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProviderFactory extends Factory
{

    protected $model = Provider::class;

    public function definition()
    {
        return [
            'brand_provider' => $this->faker->word(),
            'web_address' => $this->faker->lexify('??????.com'),
            'phone' => $this->faker->tollFreePhoneNumber,
        ];
    }
}
