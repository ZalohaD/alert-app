<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\ProgrammingLanguage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobLanguage>
 */
class JobLanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_id' => Job::inRandomOrder()->first(),
            'programming_language_id' => ProgrammingLanguage::inRandomOrder()->first()
        ];
    }
}
