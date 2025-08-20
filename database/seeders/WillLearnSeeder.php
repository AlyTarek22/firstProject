<?php

namespace Database\Seeders;

use App\Models\WillLearn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WillLearnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $will_learn = [
    // Scratch Programming (course_id = 2)
    ["course_id" => "2", "topic" => "Create interactive stories and games using blocks"],
    ["course_id" => "2", "topic" => "Understand basic programming concepts like loops and events"],
    ["course_id" => "2", "topic" => "Develop logical thinking and creativity through animations"],

    // Advanced Python Programming (course_id = 3)
    ["course_id" => "3", "topic" => "Master object-oriented programming in Python"],
    ["course_id" => "3", "topic" => "Work with files, exceptions, and advanced data structures"],
    ["course_id" => "3", "topic" => "Build real-world Python projects using best practices"],

    // AI & Machine Learning with PictoBlox (course_id = 4)
    ["course_id" => "4", "topic" => "Train AI models to recognize images, sounds, and gestures"],
    ["course_id" => "4", "topic" => "Understand basic concepts of machine learning and AI ethics"],
    ["course_id" => "4", "topic" => "Use block-based coding to build AI-powered projects"],

    // MIT App Inventor (course_id = 5)
    ["course_id" => "5", "topic" => "Design and build Android apps using visual programming"],
    ["course_id" => "5", "topic" => "Use components like buttons, images, and sensors"],
    ["course_id" => "5", "topic" => "Test apps on emulator or real Android devices"],

    // Robotics for Kids (course_id = 6)
    ["course_id" => "6", "topic" => "Understand how sensors, motors, and controllers work"],
    ["course_id" => "6", "topic" => "Build and program basic robotic systems"],
    ["course_id" => "6", "topic" => "Develop problem-solving and engineering skills"],

    // Flutter App Development (course_id = 7)
    ["course_id" => "7", "topic" => "Build cross-platform mobile apps using Flutter and Dart"],
    ["course_id" => "7", "topic" => "Design responsive and interactive UI layouts"],
    ["course_id" => "7", "topic" => "Use state management and navigation in Flutter apps"],

    // Front-End Web Development (course_id = 8)
    ["course_id" => "8", "topic" => "Build modern websites using HTML, CSS, and JavaScript"],
    ["course_id" => "8", "topic" => "Style pages with CSS Flexbox and Grid"],
    ["course_id" => "8", "topic" => "Make websites responsive and interactive"],

    // Interactive Web Development with GitHub & Vue.js (course_id = 9)
    ["course_id" => "9", "topic" => "Create dynamic interfaces using Vue.js"],
    ["course_id" => "9", "topic" => "Use Git and GitHub for version control and collaboration"],
    ["course_id" => "9", "topic" => "Build and deploy interactive web applications"],

    // PHP & MySQL Course (Includes OOP) (course_id = 10)
    ["course_id" => "10", "topic" => "Write PHP scripts using object-oriented programming"],
    ["course_id" => "10", "topic" => "Build dynamic websites connected to a MySQL database"],
    ["course_id" => "10", "topic" => "Create secure forms, sessions, and user authentication"],
];
foreach( $will_learn as $topic ) {
            WillLearn::create($topic);
    }
    }
}
