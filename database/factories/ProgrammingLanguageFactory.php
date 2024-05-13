<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProgrammingLanguage>
 */
class ProgrammingLanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $index = 0;
        $techStacks = ['PHP', 'JavaScript', 'Python', 'Java', 'Ruby', 'C#', 'Swift', 'C++', 'HTML/CSS', 'SQL', 'Node.js', 'React', 'Angular', 'Vue.js', 'Laravel', 'Django', 'Symfony'];

        return [            
            'name' => $techStacks[$index++ % count($techStacks)],
        ];
    }
}
