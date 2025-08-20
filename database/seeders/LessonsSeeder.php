<?php

namespace Database\Seeders;

use App\Models\Lessons;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $lessons = [
            // Scratch Programming (course_id = 2) — curriculum_id: 1-5
            ["curriculum_id" => 1, "title" => "Getting Started with Scratch"],
            ["curriculum_id" => 2, "title" => "Designing Your First Sprite"],
            ["curriculum_id" => 3, "title" => "Making Sprites Move"],
            ["curriculum_id" => 4, "title" => "Build an Animated Scene"],
            ["curriculum_id" => 5, "title" => "Create a Simple Game"],

            // Advanced Python Programming (course_id = 3) — curriculum_id: 6-10
            ["curriculum_id" => 6, "title" => "Deep Dive into Functions"],
            ["curriculum_id" => 7, "title" => "Classes and Objects"],
            ["curriculum_id" => 8, "title" => "Handling Exceptions"],
            ["curriculum_id" => 9, "title" => "Using External Libraries"],
            ["curriculum_id" => 10, "title" => "Project: CLI Tool"],

            // AI & Machine Learning with PictoBlox (course_id = 4) — curriculum_id: 11-15
            ["curriculum_id" => 11, "title" => "Intro to AI Concepts"],
            ["curriculum_id" => 12, "title" => "Image Classification Model"],
            ["curriculum_id" => 13, "title" => "Train a Voice Model"],
            ["curriculum_id" => 14, "title" => "AI Game Project"],
            ["curriculum_id" => 15, "title" => "Discussing AI Ethics"],

            // MIT App Inventor (course_id = 5) — curriculum_id: 16-20
            ["curriculum_id" => 16, "title" => "Installing MIT App Inventor"],
            ["curriculum_id" => 17, "title" => "Build a Hello World App"],
            ["curriculum_id" => 18, "title" => "Using Sensors in Apps"],
            ["curriculum_id" => 19, "title" => "Navigation Between Screens"],
            ["curriculum_id" => 20, "title" => "Exporting and Testing APK"],

            // Robotics for Kids (course_id = 6) — curriculum_id: 21-25
            ["curriculum_id" => 21, "title" => "What is a Robot?"],
            ["curriculum_id" => 22, "title" => "Wiring a Distance Sensor"],
            ["curriculum_id" => 23, "title" => "Controlling Motors"],
            ["curriculum_id" => 24, "title" => "Build a Robot Arm"],
            ["curriculum_id" => 25, "title" => "Final Project Demo"],

            // Flutter App Development (course_id = 7) — curriculum_id: 26-30
            ["curriculum_id" => 26, "title" => "Install Flutter SDK"],
            ["curriculum_id" => 27, "title" => "Creating a Flutter Project"],
            ["curriculum_id" => 28, "title" => "Managing App State"],
            ["curriculum_id" => 29, "title" => "Firebase Integration"],
            ["curriculum_id" => 30, "title" => "Build and Deploy App"],

            // Front-End Web Development (course_id = 8) — curriculum_id: 31-35
            ["curriculum_id" => 31, "title" => "HTML Elements and Structure"],
            ["curriculum_id" => 32, "title" => "Styling with CSS"],
            ["curriculum_id" => 33, "title" => "Responsive Layouts"],
            ["curriculum_id" => 34, "title" => "DOM Manipulation with JS"],
            ["curriculum_id" => 35, "title" => "Build a Portfolio Website"],

            // Interactive Web Development with GitHub & Vue.js (course_id = 9) — curriculum_id: 36-40
            ["curriculum_id" => 36, "title" => "Setting Up a Vue Project"],
            ["curriculum_id" => 37, "title" => "Building Components"],
            ["curriculum_id" => 38, "title" => "Intro to GitHub Workflow"],
            ["curriculum_id" => 39, "title" => "Routing in Vue"],
            ["curriculum_id" => 40, "title" => "Deploy to GitHub Pages"],

            // PHP & MySQL Course (Includes OOP) (course_id = 10) — curriculum_id: 41-45
            ["curriculum_id" => 41, "title" => "PHP Syntax and Variables"],
            ["curriculum_id" => 42, "title" => "Form Handling and Validation"],
            ["curriculum_id" => 43, "title" => "Classes and Objects in PHP"],
            ["curriculum_id" => 44, "title" => "Working with MySQL"],
            ["curriculum_id" => 45, "title" => "Build a CRUD CMS"],
        ];
        foreach ($lessons as $lesson) {
            Lessons::create($lesson);
        }
    }
}
