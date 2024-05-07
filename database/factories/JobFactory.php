<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $worktime = ['full time', 'part time'];
        
        return [
            'title' => fake()->jobTitle,
            'description' => fake()->realText(100),
            'city' => fake()->city(),
            'worktime' => $worktime[rand(0,1)],
            'salary' => '$50.000',
            'category_id' => Category::inRandomOrder()->first(),
            'user_id' => User::inRandomOrder()->first(),
            'company_id' => Company::inRandomOrder()->first(),
        ];
    }
}
