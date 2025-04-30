<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Web App',
                'slug' => Str::slug('E-Commerce Web App'),
                'meta_title' => 'E-Commerce Platform Development',
                'meta_description' => 'A custom-built e-commerce solution for online retail businesses.',
                'description' => '<h2>Project Overview</h2>
                        <p>The E-Commerce Web App was developed as a comprehensive, scalable solution tailored for <strong>ShopMaster Inc.</strong>, a growing retail business aiming to expand its operations online. The platform was designed to offer a seamless shopping experience while providing powerful backend tools for management.</p>

                        <h2>Key Features</h2>
                        <ul>
                            <li>Multi-level product categorization and inventory control</li>
                            <li>User-friendly shopping cart and checkout process</li>
                            <li>Integration with <strong>Stripe</strong> for secure payments</li>
                            <li>Customer dashboards with order history and profile management</li>
                            <li>Admin panel for order processing, refunds, and product uploads</li>
                        </ul>

                        <h2>Technical Stack</h2>
                        <p>The project was built using <strong>Laravel</strong> for the backend, with <strong>Livewire</strong> for dynamic frontend interactions and <strong>MySQL</strong> as the database. The app is fully responsive and optimized for performance and SEO.</p>

                        <h2>Results & Business Impact</h2>
                        <p>After launch, ShopMaster reported a 35% increase in online transactions within the first quarter. The admin panel allowed their team to automate several manual processes, reducing operational overhead significantly. With a solid infrastructure in place, the platform is ready to scale with growing demand.</p>',
                'client_name' => 'ShopMaster Inc.',
                'industry' => 'Retail',
                'technology' => 'Laravel, Livewire, MySQL, Stripe',
                'project_url' => 'https://shopmaster.com',
                'github_url' => null,
                'meta_image' => 'frontAssets/images/projects/ecommerce.png',
                'main_image' => 'frontAssets/images/projects/ecommerce.png',
                'completion_date' => Carbon::parse('2023-05-15'),
                'status' => 'completed',
                'is_featured' => '1',
                'is_active' => 'active',
            ],
            [
                'title' => 'Portfolio Website',
                'slug' => Str::slug('Portfolio Website'),
                'meta_title' => 'Modern Personal Portfolio',
                'meta_description' => 'Showcase of personal work and skills for professional visibility.',
                'description' => '<h2>Project Summary</h2>
                    <p>This modern, responsive portfolio website was created for <strong>John Doe</strong>, a creative professional looking to showcase his personal work, skill set, and background. The site acts as both a digital resume and a gallery of past projects.</p>

                    <h2>Core Highlights</h2>
                    <ul>
                        <li>Fully responsive design for desktop, tablet, and mobile</li>
                        <li>Interactive project gallery with modal previews</li>
                        <li>Blog section for writing case studies and personal thoughts</li>
                        <li>Contact form with validation and success messaging</li>
                        <li>Light/Dark mode toggle for user preference</li>
                    </ul>

                    <h2>Tech Used</h2>
                    <p>Built using <strong>HTML</strong>, <strong>Tailwind CSS</strong>, and <strong>Alpine.js</strong>, the project focused on clean UI, fast loading times, and minimal dependencies. All project data is pulled from a JSON-based structure, allowing quick edits without touching code.</p>

                    <h2>Outcome</h2>
                    <p>Since launching the site, John has received multiple freelance inquiries and interview requests. It has served as a central identity hub for his professional outreach and job applications.</p>',
                'client_name' => 'John Doe',
                'industry' => 'Creative',
                'technology' => 'HTML, Tailwind CSS, Alpine.js',
                'project_url' => 'https://johnportfolio.com',
                'github_url' => 'https://github.com/johndoe/portfolio',
                'meta_image' => 'frontAssets/images/projects/portfolio.png',
                'main_image' => 'frontAssets/images/projects/portfolio.png',
                'completion_date' => Carbon::parse('2024-01-10'),
                'status' => 'completed',
                'is_featured' => '0',
                'is_active' => 'active',
            ],
            [
                'title' => 'Real Estate Listing Platform',
                'slug' => Str::slug('Real Estate Listing Platform'),
                'meta_title' => 'Real Estate App with Property Listings',
                'meta_description' => 'A modern platform to browse and manage real estate listings.',
                'description' => '<h2>Introduction</h2>
                    <p>The Real Estate Listing Platform was designed for <strong>PropList</strong>, a startup seeking to simplify the property buying and selling process. The app connects real estate agents, sellers, and buyers in a clean, easy-to-use interface.</p>

                    <h2>Main Features</h2>
                    <ul>
                        <li>Agent dashboard for uploading, editing, and managing listings</li>
                        <li>Advanced filtering for users to browse by location, price, and property type</li>
                        <li>Property pages with high-resolution galleries, maps, and inquiry forms</li>
                        <li>Secure messaging system between agents and interested buyers</li>
                        <li>Bookmarking system for users to save favorite properties</li>
                    </ul>

                    <h2>Technology Stack</h2>
                    <p>The frontend was built using <strong>React</strong>, providing a fast and interactive experience, while the backend was developed with <strong>Node.js</strong> and <strong>MongoDB</strong>. The app follows RESTful architecture, making it easy to extend with a mobile version in the future.</p>

                    <h2>Achievements</h2>
                    <p>Within the first two months of deployment, the platform facilitated over 1,000 property listings and generated dozens of successful leads for agents. The streamlined design helped users find properties faster and connect with sellers more efficiently.</p>

                    <h2>Next Steps</h2>
                    <p>Future updates include AI-based recommendations, CRM integration for agents, and a mobile app rollout planned by Q4.</p>',
                'client_name' => 'PropList',
                'industry' => 'Real Estate',
                'technology' => 'React, Node.js, MongoDB',
                'project_url' => 'https://proplist.io',
                'github_url' => null,
                'meta_image' => 'frontAssets/images/projects/real-state.jpg',
                'main_image' => 'frontAssets/images/projects/real-state.jpg',
                'completion_date' => Carbon::parse('2025-03-05'),
                'status' => 'ongoing',
                'is_featured' => '1',
                'is_active' => 'active',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
