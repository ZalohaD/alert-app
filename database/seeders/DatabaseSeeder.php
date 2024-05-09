<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Tag;
use App\Models\TagJob;
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
        Tag::factory(20)->create();
        Job::factory(100)->create();
        TagJob::factory(100)->create();
    }
}
