<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $index = 0;
        $category = ['Marketing', 'Customer Service', 'Human Resource', 'Project Management', 'Business Development', 'Sales & Communication', 'Teaching & Education', 'Design & Creative'];
        
        return [
            'name' => $category[$index++ % count($category)],
        ];
    }
}
