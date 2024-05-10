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
        $worktime = ['Full time', 'Part time'];
        $english = ['Beginner', 'Elementary', 'Intermediate', 'Upper-intermediate', 'Advanced', 'Proficiency'];
        $techStacks = ['PHP', 'JavaScript', 'Python', 'Java', 'Ruby', 'C#', 'Swift', 'C++', 'HTML/CSS', 'SQL', 'Node.js', 'React', 'Angular', 'Vue.js', 'Laravel', 'Django', 'Symfony'];


        return [
            'title' => fake()->jobTitle,
            'description' => fake()->realText(100),
            'city' => fake()->city(),
            'worktime' => $worktime[rand(0,1)],
            'experience'=> fake()->randomNumber(1,7),
            'english' => $english[array_rand($english)],
            // 'proglang' => fake()->randomElement($techStacks),
            'salary' => number_format(fake()->numberBetween(5000, 100000), 0, '.', '.'),
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'company_id' => Company::inRandomOrder()->first()->id,
        ];
    }
}
