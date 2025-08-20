<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['title' => 'Programming', 'description' => 'Courses related to programming languages and software development.'],
            ['title' => 'Mathematics', 'description' => 'Courses focused on math topics like algebra, calculus, and statistics.'],
            ['title' => 'Science', 'description' => 'Covers physics, chemistry, biology, and more.'],
            ['title' => 'Humanities', 'description' => 'Subjects like history, philosophy, and literature.'],
            ['title' => 'Business', 'description' => 'Includes management, marketing, and entrepreneurship.'],
            ['title' => 'Art & Design', 'description' => 'Creative fields including drawing, design, and multimedia.'],
            ['title' => 'Languages', 'description' => 'Language learning like English, Spanish, French, etc.'],
            ['title' => 'Technology', 'description' => 'Covers AI, cybersecurity, and IT topics.'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
