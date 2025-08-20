<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Scratch Programming',
                'description' => 'This fun and interactive course introduces kids (ages 7–10) to coding using Scratch.',
                'language' => 'English',
                'duration' => '4 weeks',
                'price' => 200,
                'category_id' => 3,
                'instructor_id' => 3,
                'level' => 'BEGINNER',
                'image' => 'scratch.png',
            ],
            [
                'title' => 'Advanced Python Programming',
                'description' => 'This course is designed for students with a basic understanding of Python and covers advanced concepts.',
                'language' => 'English',
                'duration' => '6 weeks',
                'price' => 100,
                'category_id' => 3,
                'instructor_id' => 5,
                'level' => 'Advanced',
                'image' => 'advanced-python.png',
            ],
            [
                'title' => 'AI & Machine Learning with Pictoblox',
                'description' => 'This hands-on course introduces kids (ages 7–10) to AI and ML using Pictoblox.',
                'language' => 'English',
                'duration' => '5 weeks',
                'price' => 100,
                'category_id' => 3,
                'instructor_id' => 5,
                'level' => 'BEGINNER',
                'image' => 'ai-pictoblox.png',
            ],
            [
                'title' => 'MIT App Inventor',
                'description' => 'This hands-on course introduces young learners (ages 7–10) to app development using MIT App Inventor.',
                'language' => 'English',
                'duration' => '4 weeks',
                'price' => 200,
                'category_id' => 3,
                'instructor_id' => 6,
                'level' => 'BEGINNER',
                'image' => 'mit-app-inventor.png',
            ],
            [
                'title' => 'Robotics for Kids',
                'description' => 'This hands-on course introduces young learners (ages 7–10) to robotics and automation.',
                'language' => 'English',
                'duration' => '5 weeks',
                'price' => 100,
                'category_id' => 3,
                'instructor_id' => 7,
                'level' => 'BEGINNER',
                'image' => 'robotics.png',
            ],
            [
                'title' => 'Flutter App Development',
                'description' => 'This interactive course introduces kids (ages 7–10) to mobile app development with Flutter.',
                'language' => 'English',
                'duration' => '6 weeks',
                'price' => 100,
                'category_id' => 3,
                'instructor_id' => 5,
                'level' => 'BEGINNER',
                'image' => 'flutter.png',
            ],
            [
                'title' => 'Front-End Web Development',
                'description' => 'This course focuses on essential front-end development tools like HTML, CSS, and JavaScript.',
                'language' => 'English',
                'duration' => '8 weeks',
                'price' => 200,
                'category_id' => 5,
                'instructor_id' => 6,
                'level' => 'Advanced',
                'image' => 'frontend.png',
            ],
            [
                'title' => 'Interactive Web Development with GitHub & Vue.js',
                'description' => 'This course introduces you to GitHub for version control and front-end development with Vue.js.',
                'language' => 'English',
                'duration' => '6 weeks',
                'price' => 100,
                'category_id' => 7,
                'instructor_id' => 6,
                'level' => 'Advanced',
                'image' => 'vue-github.png',
            ],
            [
                'title' => 'PHP & MySQL Course (Includes OOP)',
                'description' => 'This comprehensive course teaches PHP from scratch with MySQL integration and object-oriented programming.',
                'language' => 'English',
                'duration' => '6 weeks',
                'price' => 100,
                'category_id' => 8,
                'instructor_id' => 7,
                'level' => 'BEGINNER',
                'image' => 'php-mysql.png',
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
