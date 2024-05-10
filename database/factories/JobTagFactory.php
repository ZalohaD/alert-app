<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobTag>
 */
class JobTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tag_id' => Tag::inRandomOrder()->first(),
            'job_id' => Job::inRandomOrder()->first()
        ];
    }
}
