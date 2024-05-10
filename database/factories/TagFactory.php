<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $index = 0;

        $tags = ['Technical', 'Non-Technical', 'Remote', 'Office', 'PHP', 'JavaScript', 'Python', 'Java', 'Ruby', 'C#', 'Swift', 'C++', 'HTML/CSS', 'SQL', 'Node.js', 'React', 'Angular', 'Vue.js', 'Laravel', 'Django', 'Symfony'];

        return [
            'name' => $tags[$index++ % count($tags)]
        ];
    }
}
