<?php

namespace Database\Seeders;

use App\Models\Requirement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*
Scratch programming req

Basic Computer Skills
Internet Access
Ability to Read Basic English

        */

      $requirement = [
    // Advanced Python Programming (course_id = 3)
    ["course_id" => "3", "requirement" => "Solid understanding of Python basics"],
    ["course_id" => "3", "requirement" => "Familiarity with object-oriented programming (OOP)"],
    ["course_id" => "3", "requirement" => "Python 3 installed on the system"],
    ["course_id" => "3", "requirement" => "Code editor (e.g., VS Code or PyCharm)"],
    ["course_id" => "3", "requirement" => "Basic knowledge of command-line usage"],

    // AI & Machine Learning with PictoBlox (course_id = 4)
    ["course_id" => "4", "requirement" => "Basic knowledge of block-based programming"],
    ["course_id" => "4", "requirement" => "Installed version of PictoBlox or access to the online version"],
    ["course_id" => "4", "requirement" => "Internet access for downloading AI models or datasets"],
    ["course_id" => "4", "requirement" => "A computer with camera and microphone"],
    ["course_id" => "4", "requirement" => "Curiosity and interest in how AI works"],

    // MIT App Inventor (course_id = 5)
    ["course_id" => "5", "requirement" => "Basic computer skills"],
    ["course_id" => "5", "requirement" => "Google account for logging into MIT App Inventor"],
    ["course_id" => "5", "requirement" => "Android device or emulator for testing apps"],
    ["course_id" => "5", "requirement" => "Internet connection"],
    ["course_id" => "5", "requirement" => "Familiarity with block-based logic (helpful but not required)"],

    // Robotics for Kids (course_id = 6)
    ["course_id" => "6", "requirement" => "Basic understanding of programming logic"],
    ["course_id" => "6", "requirement" => "Access to a robotics kit (e.g., Arduino, LEGO, or PictoBlox)"],
    ["course_id" => "6", "requirement" => "Computer or laptop with required software installed"],
    ["course_id" => "6", "requirement" => "Adult supervision (recommended for younger kids)"],
    ["course_id" => "6", "requirement" => "Curiosity about how machines and sensors work"],

    // Flutter App Development (course_id = 7)
    ["course_id" => "7", "requirement" => "Basic knowledge of any programming language"],
    ["course_id" => "7", "requirement" => "Installed Flutter SDK and Android Studio or VS Code"],
    ["course_id" => "7", "requirement" => "Android/iOS emulator or real device for testing"],
    ["course_id" => "7", "requirement" => "Understanding of mobile app design basics"],
    ["course_id" => "7", "requirement" => "Strong internet connection"],

    // Front-End Web Development (course_id = 8)
    ["course_id" => "8", "requirement" => "Basic computer literacy"],
    ["course_id" => "8", "requirement" => "Installed code editor (e.g., VS Code)"],
    ["course_id" => "8", "requirement" => "Understanding of how websites work"],
    ["course_id" => "8", "requirement" => "Curiosity about web design and user interfaces"],
    ["course_id" => "8", "requirement" => "Internet access"],

    // Interactive Web Development with GitHub & Vue.js (course_id = 9)
    ["course_id" => "9", "requirement" => "Understanding of HTML, CSS, and basic JavaScript"],
    ["course_id" => "9", "requirement" => "Git and GitHub account setup"],
    ["course_id" => "9", "requirement" => "Node.js and npm installed"],
    ["course_id" => "9", "requirement" => "Familiarity with using the terminal/command line"],
    ["course_id" => "9", "requirement" => "VS Code or similar IDE installed"],

    // PHP & MySQL Course (Includes OOP) (course_id = 10)
    ["course_id" => "10", "requirement" => "Understanding of HTML and basic programming concepts"],
    ["course_id" => "10", "requirement" => "PHP installed on local machine or server (e.g., XAMPP, WAMP)"],
    ["course_id" => "10", "requirement" => "MySQL or MariaDB setup for database practice"],
    ["course_id" => "10", "requirement" => "Knowledge of OOP fundamentals"],
    ["course_id" => "10", "requirement" => "Comfortable with using a code editor and terminal"],
];

        foreach( $requirement as $req ) {
            Requirement::create($req);
    }
}
}
