<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $levels = [
            // Scratch Programming (course_id = 2)
            ["course_id" => "2", "number" => 1, "name" => "Beginner"],

            // Advanced Python Programming (course_id = 3)
            ["course_id" => "3", "number" => 3, "name" => "Advanced"],

            // AI & Machine Learning with PictoBlox (course_id = 4)
            ["course_id" => "4", "number" => 2, "name" => "Intermediate"],

            // MIT App Inventor (course_id = 5)
            ["course_id" => "5", "number" => 1, "name" => "Beginner"],

            // Robotics for Kids (course_id = 6)
            ["course_id" => "6", "number" => 1, "name" => "Beginner"],

            // Flutter App Development (course_id = 7)
            ["course_id" => "7", "number" => 2, "name" => "Intermediate"],

            // Front-End Web Development (course_id = 8)
            ["course_id" => "8", "number" => 1, "name" => "Beginner"],

            // Interactive Web Development with GitHub & Vue.js (course_id = 9)
            ["course_id" => "9", "number" => 3, "name" => "Advanced"],

            // PHP & MySQL Course (Includes OOP) (course_id = 10)
            ["course_id" => "10", "number" => 2, "name" => "Intermediate"],
        ];
        foreach ($levels as $level) {
            Level::create($level);
        }
    }
}
