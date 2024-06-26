<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobLanguage;
use App\Models\ProgrammingLanguage;
use App\Models\Testimonial;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create();
        Category::factory(8)->create();
        Company::factory(20)->create();
        ProgrammingLanguage::factory(17)->create();
        Job::factory(100)->create();
        JobLanguage::factory(100)->create();
        Testimonial::factory(4)->create();
    }
}
