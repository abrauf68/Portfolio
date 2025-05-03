<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Frontend Skills
            [
                'name' => 'HTML',
                'slug' => Str::slug('HTML'),
                'percentage' => '95',
                'skill_type' => 'frontend',
                'description' => "HTML is the foundation of all web pages. It provides structure to content on the web. Essential for creating static and dynamic pages.",
                'is_featured' => '0',
                'icon' => 'fa-building-columns',
            ],
            [
                'name' => 'CSS',
                'slug' => Str::slug('CSS'),
                'percentage' => '90',
                'skill_type' => 'frontend',
                'description' => "CSS is used to style HTML elements. It controls layout, colors, and fonts. Enables responsive and visually appealing designs.",
                'is_featured' => '0',
                'icon' => 'fa-building-columns',
            ],
            [
                'name' => 'JavaScript',
                'slug' => Str::slug('JavaScript'),
                'percentage' => '85',
                'skill_type' => 'frontend',
                'description' => "JavaScript enables interactivity on web pages. It's widely used for client-side logic. Key for dynamic content and SPA behavior.",
                'is_featured' => '1',
                'icon' => 'fa-building-columns',
            ],
            [
                'name' => 'JQuery',
                'slug' => Str::slug('JQuery'),
                'percentage' => '80',
                'skill_type' => 'frontend',
                'description' => "jQuery is a fast, small JavaScript library. It simplifies DOM manipulation and AJAX. Often used for quick scripting needs.",
                'is_featured' => '0',
                'icon' => 'fa-building-columns',
            ],
            [
                'name' => 'Vue.js',
                'slug' => Str::slug('Vue.js'),
                'percentage' => '75',
                'skill_type' => 'frontend',
                'description' => "Vue.js is a reactive JavaScript framework. It is great for building UI and SPAs. Known for its simplicity and flexibility.",
                'is_featured' => '1',
                'icon' => 'fa-building-columns',
            ],
            [
                'name' => 'Bootstrap',
                'slug' => Str::slug('Bootstrap'),
                'percentage' => '90',
                'skill_type' => 'frontend',
                'description' => "Bootstrap is a popular CSS framework. It helps build responsive designs quickly. Provides pre-styled components and utilities.",
                'is_featured' => '0',
                'icon' => 'fa-building-columns',
            ],

            // Backend Skills
            [
                'name' => 'PHP',
                'slug' => Str::slug('PHP'),
                'percentage' => '85',
                'skill_type' => 'backend',
                'description' => "PHP is a server-side scripting language. Used to build dynamic and interactive websites. Powers many CMS and web apps.",
                'is_featured' => '0',
                'icon' => 'fa-building-columns',
            ],
            [
                'name' => 'Laravel',
                'slug' => Str::slug('Laravel'),
                'percentage' => '90',
                'skill_type' => 'backend',
                'description' => "Laravel is a robust PHP framework. It simplifies routing, security, and database handling. Ideal for scalable web applications.",
                'is_featured' => '1',
                'icon' => 'fa-building-columns',
            ],
            [
                'name' => 'MySQL',
                'slug' => Str::slug('MySQL'),
                'percentage' => '80',
                'skill_type' => 'backend',
                'description' => "MySQL is an open-source relational database. It stores data for web and desktop apps. Known for speed and reliability.",
                'is_featured' => '0',
                'icon' => 'fa-building-columns',
            ],
            [
                'name' => 'Livewire',
                'slug' => Str::slug('Livewire'),
                'percentage' => '70',
                'skill_type' => 'backend',
                'description' => "Livewire brings reactivity to Laravel apps. It allows dynamic interfaces using Blade. No need for custom JavaScript.",
                'is_featured' => '0',
                'icon' => 'fa-building-columns',
            ],
            [
                'name' => 'REST APIs',
                'slug' => Str::slug('REST APIs'),
                'percentage' => '75',
                'skill_type' => 'backend',
                'description' => "REST APIs enable communication between systems. They follow standard HTTP methods. Common in mobile and web backends.",
                'is_featured' => '0',
                'icon' => 'fa-building-columns',
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
