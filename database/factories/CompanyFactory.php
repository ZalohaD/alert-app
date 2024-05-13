<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'description' => fake()->realText(200),
            'employees' => rand(10,1000),
            'address' => fake()->address(),
            'website' => 'https://google.com',
            'logo' => 'com-logo-' . rand(1, 5) . '.jpg'
        ];
    }
}
