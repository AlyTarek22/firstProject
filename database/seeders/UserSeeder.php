<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Alice Johnson', 'email' => 'alice@student.com', 'role' => 'Student', 'password' => 'password123'],
            ['name' => 'Bob Smith', 'email' => 'bob@instructor.com', 'role' => 'Instructor', 'password' => 'securepass456'],
            ['name' => 'Charlie Admin', 'email' => 'charlie@admin.com', 'role' => 'Admin', 'password' => 'adminpass789'],
            ['name' => 'Diana Wells', 'email' => 'diana.wells@institute.com', 'role' => 'Instructor', 'password' => 'teachpass1'],
            ['name' => 'Ethan Brooks', 'email' => 'ethan.brooks@institute.com', 'role' => 'Instructor', 'password' => 'teachpass2'],
            ['name' => 'Fiona Gray', 'email' => 'fiona.gray@institute.com', 'role' => 'Instructor', 'password' => 'teachpass3'],
            ['name' => 'Ivy Lane', 'email' => 'ivy.lane@student.com', 'role' => 'Student', 'password' => 'studypass1'],
            ['name' => 'Jack Carter', 'email' => 'jack.carter@student.com', 'role' => 'Student', 'password' => 'studypass2'],
            ['name' => 'Karen Price', 'email' => 'karen.price@student.com', 'role' => 'Student', 'password' => 'studypass3'],
            ['name' => 'Liam Moore', 'email' => 'liam.moore@student.com', 'role' => 'Student', 'password' => 'studypass4'],
            ['name' => 'Maya Reed', 'email' => 'maya.reed@student.com', 'role' => 'Student', 'password' => 'studypass5'],
            ['name' => 'Nathan Young', 'email' => 'nathan.young@student.com', 'role' => 'Student', 'password' => 'studypass6'],
            ['name' => 'Olivia Hayes', 'email' => 'olivia.hayes@student.com', 'role' => 'Student', 'password' => 'studypass7'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
