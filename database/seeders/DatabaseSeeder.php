<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Requirement;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(UserSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(CourseSeeder::class);
        //  $this->call(EnrollmentSeeder::class);
        //   $this->call(RequirementSeeder::class);
        //   $this->call(WillLearnSeeder::class);
        //   $this->call(course_forSeeder::class);
        //   $this->call(levelsSeeder::class)/;
        //   $this->call(CurriculumSeeder::class);
          $this->call(LessonsSeeder::class);

    }
}
