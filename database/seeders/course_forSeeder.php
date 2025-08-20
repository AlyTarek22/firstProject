<?php

namespace Database\Seeders;

use App\Models\course_for;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class course_forSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $course_for = [
    // Scratch Programming (course_id = 2)
    ["course_id" => "2", "audience" => "Kids aged 8+ who are new to coding"],
    ["course_id" => "2", "audience" => "Students interested in creative storytelling and animation"],
    ["course_id" => "2", "audience" => "Absolute beginners with no prior programming experience"],

    // Advanced Python Programming (course_id = 3)
    ["course_id" => "3", "audience" => "Students with basic Python knowledge"],
    ["course_id" => "3", "audience" => "Aspiring developers wanting to deepen their skills"],
    ["course_id" => "3", "audience" => "Anyone preparing for technical coding interviews"],

    // AI & Machine Learning with PictoBlox (course_id = 4)
    ["course_id" => "4", "audience" => "Kids and teens curious about AI and technology"],
    ["course_id" => "4", "audience" => "Students familiar with block-based coding"],
    ["course_id" => "4", "audience" => "STEM educators looking for hands-on AI teaching tools"],

    // MIT App Inventor (course_id = 5)
    ["course_id" => "5", "audience" => "Beginners interested in mobile app development"],
    ["course_id" => "5", "audience" => "Kids and teens wanting to create Android apps easily"],
    ["course_id" => "5", "audience" => "Teachers seeking a visual introduction to app design"],

    // Robotics for Kids (course_id = 6)
    ["course_id" => "6", "audience" => "Children aged 9–14 curious about robotics"],
    ["course_id" => "6", "audience" => "Students who enjoy hands-on STEM activities"],
    ["course_id" => "6", "audience" => "Beginner programmers interested in hardware interaction"],

    // Flutter App Development (course_id = 7)
    ["course_id" => "7", "audience" => "Beginners with basic programming knowledge"],
    ["course_id" => "7", "audience" => "Students interested in building Android & iOS apps"],
    ["course_id" => "7", "audience" => "Aspiring app developers wanting cross-platform skills"],

    // Front-End Web Development (course_id = 8)
    ["course_id" => "8", "audience" => "Anyone new to web development"],
    ["course_id" => "8", "audience" => "Students interested in UI/UX design and websites"],
    ["course_id" => "8", "audience" => "Designers who want to learn how to code their designs"],

    // Interactive Web Development with GitHub & Vue.js (course_id = 9)
    ["course_id" => "9", "audience" => "Students with basic web development experience"],
    ["course_id" => "9", "audience" => "Developers looking to learn modern JS frameworks"],
    ["course_id" => "9", "audience" => "Anyone who wants to collaborate using Git & GitHub"],

    // PHP & MySQL Course (Includes OOP) (course_id = 10)
    ["course_id" => "10", "audience" => "Beginners interested in backend development"],
    ["course_id" => "10", "audience" => "Students who want to build dynamic websites"],
    ["course_id" => "10", "audience" => "Those preparing for full-stack development roles"],
];
foreach( $course_for as $audience ) {
            course_for::create($audience);
    }
    }
}
