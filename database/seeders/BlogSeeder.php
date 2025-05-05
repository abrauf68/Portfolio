<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Mastering Laravel Routing',
                'slug' => Str::slug('Mastering Laravel Routing'),
                'user_id' => 1,
                'blog_category_id' => 1,
                'main_image' => 'frontAssets/images/blog/laravel_routing.jpg',
                'meta_image' => 'frontAssets/images/blog/laravel_routing.jpg',
                'meta_description' => 'Learn how Laravel handles web and API routing effectively.',
                'content' => '<h2>Understanding the Basics of Laravel Routing</h2>
                            <p>Laravel routing is a fundamental feature that maps URLs to controllers or closures. It simplifies defining routes and allows grouping, middleware assignment, and naming conventions. Laravel supports both GET and POST routes, making it easy to structure an application cleanly and logically.</p>

                            <h2>Advanced Routing Techniques</h2>
                            <p>You can use route model binding, parameter constraints, and resource controllers to build scalable applications. Named routes help in generating URLs dynamically. Route groups and middleware make it easier to manage permissions and authentication flows across sections of the app.</p>

                            <h2>Best Practices for Laravel Routing</h2>
                            <p>Keep routes organized by using route files like web.php and api.php. Always use RESTful naming conventions, especially for APIs. Avoid placing too much logic in closures, and use controllers to maintain clean, testable code. Proper use of routing boosts maintainability and scalability.</p>
                            ',
                'tags' => json_encode(['Laravel', 'PHP', 'Routing']),
                'is_active' => 'active',
            ],
            [
                'title' => 'Top 10 VSCode Extensions for Developers',
                'slug' => Str::slug('Top 10 VSCode Extensions for Developers'),
                'user_id' => 1,
                'blog_category_id' => 2,
                'main_image' => 'frontAssets/images/blog/vscode_extentions.jpg',
                'meta_image' => 'frontAssets/images/blog/vscode_extentions.jpg',
                'meta_description' => 'Enhance your coding experience with these VSCode extensions.',
                'content' => '<h2>Why VSCode is a Developer Favorite</h2>
                            <p>Visual Studio Code (VSCode) is one of the most popular code editors, thanks to its performance, extensions, and rich ecosystem. It supports nearly every language, offers Git integration, and has powerful debugging tools built-in.</p>

                            <h2>Essential Extensions You Should Install</h2>
                            <p>Extensions like Prettier, ESLint, GitLens, Live Server, and PHP Intelephense significantly enhance productivity. Prettier helps format code consistently, while GitLens provides inline Git history. Live Server enables live reloading for frontend development.</p>

                            <h2>Boosting Productivity with Shortcuts and Themes</h2>
                            <p>In addition to extensions, using keyboard shortcuts and custom themes like Dracula or One Dark Pro improves the development experience. Customizing your workspace allows faster access to tools and a more enjoyable coding environment.</p>
                            ',
                'tags' => json_encode(['VSCode', 'Tools', 'Development']),
                'is_active' => 'active',
            ],
            [
                'title' => 'Beginner’s Guide to Git and GitHub',
                'slug' => Str::slug('Beginner’s Guide to Git and GitHub'),
                'user_id' => 1,
                'blog_category_id' => 1,
                'main_image' => 'frontAssets/images/blog/github.jpg',
                'meta_image' => 'frontAssets/images/blog/github.jpg',
                'meta_description' => 'Understand the basics of version control using Git and GitHub.',
                'content' => '<h2>What is Version Control?</h2>
                            <p>Version control allows developers to manage changes to code over time. Git is a distributed version control system that lets you track code history, collaborate with others, and revert changes if needed.</p>

                            <h2>Getting Started with Git</h2>
                            <p>To use Git, install it on your machine and configure your username and email. You can initialize a repository with `git init`, add files with `git add`, and commit changes using `git commit`. Understanding branches is also crucial for collaborative work.</p>

                            <h2>Using GitHub for Collaboration</h2>
                            <p>GitHub hosts your repositories online and provides collaboration tools like pull requests and issue tracking. You can clone repositories, fork projects, and contribute via pull requests. GitHub Actions even allows CI/CD right from your repository.</p>
                            ',
                'tags' => json_encode(['Git', 'GitHub', 'Version Control']),
                'is_active' => 'active',
            ],
            [
                'title' => 'Understanding MVC Architecture in Web Development',
                'slug' => Str::slug('Understanding MVC Architecture in Web Development'),
                'user_id' => 1,
                'blog_category_id' => 3,
                'main_image' => 'frontAssets/images/blog/mvc.jpg',
                'meta_image' => 'frontAssets/images/blog/mvc.jpg',
                'meta_description' => 'MVC is a core pattern for organizing code in web apps.',
                'content' => '<h2>What is MVC?</h2>
                            <p>MVC stands for Model-View-Controller. It is a design pattern that separates the data (Model), user interface (View), and logic (Controller). This separation makes the application easier to manage and scale.</p>

                            <h2>Benefits of Using MVC</h2>
                            <p>The MVC structure promotes code reusability, maintainability, and testability. For example, views can change without affecting models, and controllers can manage logic independently. This makes large projects easier to develop and debug.</p>

                            <h2>MVC in Frameworks Like Laravel</h2>
                            <p>Frameworks such as Laravel, Django, and ASP.NET MVC implement the MVC pattern natively. Laravel uses Eloquent for models, Blade for views, and routes/controllers to handle application flow, which aligns well with MVC principles.</p>
                            ',
                'tags' => json_encode(['MVC', 'Web Design', 'Architecture']),
                'is_active' => 'active',
            ],
            [
                'title' => 'Deploying Laravel Apps to Shared Hosting',
                'slug' => Str::slug('Deploying Laravel Apps to Shared Hosting'),
                'user_id' => 1,
                'blog_category_id' => 4,
                'main_image' => 'frontAssets/images/blog/deploy.jpg',
                'meta_image' => 'frontAssets/images/blog/deploy.jpg',
                'meta_description' => 'Yes, you can deploy Laravel to shared hosting. Here’s how.',
                'content' => '<h2>Is Shared Hosting Laravel-Compatible?</h2>
                    <p>Although Laravel is designed for modern servers like VPS and cloud, it is possible to run it on shared hosting by understanding a few limitations. Many shared hosts now support PHP 8+ and Composer, which are essential for Laravel.</p>

                    <h2>Steps to Deploy Laravel</h2>
                    <p>First, upload your project (except `/vendor`) to your hosting account. Point the domain to the `/public` folder, or move its content to the root folder carefully. Set the correct file permissions and update `.env` with your production DB settings.</p>

                    <h2>Common Challenges and Solutions</h2>
                    <p>You may face issues like memory limits, lack of CLI access, or composer errors. Pre-building assets and uploading the `vendor` folder locally can help. Alternatively, choose hosts that explicitly support Laravel to avoid deployment headaches.</p>
                    ',
                'tags' => json_encode(['Laravel', 'Hosting', 'Deployment']),
                'is_active' => 'active',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
