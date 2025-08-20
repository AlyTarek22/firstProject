<?php

namespace Database\Seeders;

use App\Models\Curriculum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $curriculums = [
            // Scratch Programming (course_id = 2)
            ["course_id" => "2", "Module" => "Introduction to Scratch Interface"],
            ["course_id" => "2", "Module" => "Creating Sprites and Backgrounds"],
            ["course_id" => "2", "Module" => "Basic Motion and Events"],
            ["course_id" => "2", "Module" => "Building Your First Animation"],
            ["course_id" => "2", "Module" => "Creating Interactive Games"],

            // Advanced Python Programming (course_id = 3)
            ["course_id" => "3", "Module" => "Advanced Functions and Scope"],
            ["course_id" => "3", "Module" => "Object-Oriented Programming in Python"],
            ["course_id" => "3", "Module" => "Error Handling and File I/O"],
            ["course_id" => "3", "Module" => "Working with APIs and Modules"],
            ["course_id" => "3", "Module" => "Final Project: Real-World Application"],

            // AI & Machine Learning with PictoBlox (course_id = 4)
            ["course_id" => "4", "Module" => "Introduction to AI and Machine Learning"],
            ["course_id" => "4", "Module" => "Image Recognition with PictoBlox"],
            ["course_id" => "4", "Module" => "Voice and Gesture Detection"],
            ["course_id" => "4", "Module" => "Building AI-Powered Projects"],
            ["course_id" => "4", "Module" => "Ethics and Future of AI"],

            // MIT App Inventor (course_id = 5)
            ["course_id" => "5", "Module" => "Getting Started with MIT App Inventor"],
            ["course_id" => "5", "Module" => "Designing Your First App"],
            ["course_id" => "5", "Module" => "Using Buttons, Images, and Sensors"],
            ["course_id" => "5", "Module" => "Creating Multi-Screen Apps"],
            ["course_id" => "5", "Module" => "Publishing and Sharing Your App"],

            // Robotics for Kids (course_id = 6)
            ["course_id" => "6", "Module" => "What is Robotics?"],
            ["course_id" => "6", "Module" => "Getting Started with Sensors"],
            ["course_id" => "6", "Module" => "Programming Basic Movements"],
            ["course_id" => "6", "Module" => "Building and Testing a Robot"],
            ["course_id" => "6", "Module" => "Project: Obstacle Avoiding Robot"],

            // Flutter App Development (course_id = 7)
            ["course_id" => "7", "Module" => "Setting Up Flutter and Dart"],
            ["course_id" => "7", "Module" => "Creating a Basic UI"],
            ["course_id" => "7", "Module" => "State Management and Navigation"],
            ["course_id" => "7", "Module" => "Connecting to APIs and Firebase"],
            ["course_id" => "7", "Module" => "Deploying Your App"],

            // Front-End Web Development (course_id = 8)
            ["course_id" => "8", "Module" => "HTML Fundamentals"],
            ["course_id" => "8", "Module" => "CSS Styling and Layouts"],
            ["course_id" => "8", "Module" => "Responsive Web Design"],
            ["course_id" => "8", "Module" => "JavaScript Basics"],
            ["course_id" => "8", "Module" => "Final Web Project"],

            // Interactive Web Development with GitHub & Vue.js (course_id = 9)
            ["course_id" => "9", "Module" => "Intro to Vue.js and SPA Concepts"],
            ["course_id" => "9", "Module" => "Vue Components and Props"],
            ["course_id" => "9", "Module" => "Using Git and GitHub in Projects"],
            ["course_id" => "9", "Module" => "Routing and State Management"],
            ["course_id" => "9", "Module" => "Deploying Your Vue App"],

            // PHP & MySQL Course (Includes OOP) (course_id = 10)
            ["course_id" => "10", "Module" => "Introduction to PHP and MySQL"],
            ["course_id" => "10", "Module" => "Working with Forms and Sessions"],
            ["course_id" => "10", "Module" => "Object-Oriented PHP"],
            ["course_id" => "10", "Module" => "CRUD Operations with MySQL"],
            ["course_id" => "10", "Module" => "Building a Mini CMS Project"],
        ];
        foreach ($curriculums as $curriculum) {
            Curriculum::create($curriculum);
        }
    }
}
