<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                'company_name' => 'The Soft Cube',
                'company_url' => 'https://thesoftcube.com/',
                'role' => 'Internee (PHP/Laravel)',
                'from_date' => 'Jan 2023',
                'to_date' => 'Jan 2024',
                'description' => 'Completed a year-long internship focusing on PHP and Laravel development. Gained real-world experience in MVC, REST APIs, and database handling.',
            ],
            [
                'company_name' => 'PIX Solutions',
                'company_url' => 'https://revoluxit.com/',
                'role' => 'Full Stack Developer (Senior)',
                'from_date' => 'Jan 2024',
                'to_date' => 'Mar 2025',
                'description' => 'Led full-stack development projects using PHP/Laravel and Vue.js. Delivered scalable web apps and improved system performance significantly.',
            ],
            [
                'company_name' => 'SuperSoft Technologies',
                'company_url' => 'https://supersoft-tech.com/',
                'role' => 'Full Stack Developer (Senior)',
                'from_date' => 'Mar 2025',
                'to_date' => 'Present',
                'description' => 'Working on large-scale applications using Laravel, Vue.js, and jQuery. Collaborating on agile teams to deliver optimized and secure software solutions.',
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
