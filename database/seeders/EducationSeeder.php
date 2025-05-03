<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educations = [
            [
                'institute_name' => 'Al Hayyan H/S School Zahir Pir',
                'course_name' => 'Matriculation (Biology)',
                'from_date' => '2017',
                'to_date' => '2019',
                'description' => 'Completed matric with distinction, securing 978 out of 1100 marks. Built a strong foundation in science and analytical thinking.',
            ],
            [
                'institute_name' => 'MBI College Zahir Pir',
                'course_name' => 'Intermediate (Computer Science)',
                'from_date' => '2019',
                'to_date' => '2021',
                'description' => 'Achieved 1071 out of 1100 marks with a focus on programming and problem-solving. Recognized for academic excellence and top performance.',
            ],
            [
                'institute_name' => 'Islamia University Bahawalpur',
                'course_name' => 'BS Computer Science',
                'from_date' => '2021',
                'to_date' => '2023',
                'description' => 'Graduated with 3.78 CGPA, mastering core computer science concepts. Engaged in projects showcasing software development skills.',
            ],
            [
                'institute_name' => 'Smart Start IT Institute Khanpur',
                'course_name' => 'Web Development (PHP)',
                'from_date' => '2021',
                'to_date' => '2022',
                'description' => 'Completed a professional PHP course focused on real-world web applications. Gained hands-on experience in full-stack development.',
            ],
        ];

        foreach ($educations as $education) {
            Education::create($education);
        }
    }
}
