<?php

namespace Database\Seeders;

use App\Models\CompanyService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompanyServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Custom Web Development',
                'slug' => Str::slug('Custom Web Development'),
                'meta_title' => 'Custom Web Application Development | Tailored Business Solutions',
                'meta_description' => 'Professional custom web application development services with Laravel/PHP, Vue.js, and MySQL. Build scalable business solutions tailored to your needs.',
                'details' => '<h2>Transform Your Business with Custom Web Applications</h2>
                            <p>We specialize in creating bespoke web applications that streamline operations and drive growth. Our full-cycle development process includes:</p>

                            <h3>What We Offer:</h3>
                            <ul>
                                <li>Enterprise-grade application architecture</li>
                                <li>Custom workflow automation systems</li>
                                <li>Inventory management solutions</li>
                                <li>CRM and ERP system development</li>
                                <li>Real-time collaboration tools</li>
                            </ul>

                            <h3>Our Expertise:</h3>
                            <ul>
                                <li>Laravel-based MVC architecture</li>
                                <li>Vue.js powered interactive dashboards</li>
                                <li>MySQL database design and optimization</li>
                                <li>Third-party API integrations</li>
                                <li>Cloud-ready deployments (AWS, DigitalOcean)</li>
                            </ul>

                            <h3>Development Lifecycle:</h3>
                            <ol>
                                <li>Requirement analysis and planning</li>
                                <li>UI/UX prototyping</li>
                                <li>Agile development sprints</li>
                                <li>Quality assurance testing</li>
                                <li>Deployment and maintenance</li>
                            </ol>

                            <p>Our applications feature:</p>
                            <ul>
                                <li>Role-based access control (RBAC)</li>
                                <li>Multi-tenant architecture</li>
                                <li>Payment gateway integration</li>
                                <li>Automated reporting systems</li>
                                <li>Cross-platform compatibility</li>
                            </ul>',
                'meta_image' => 'frontAssets/images/services/web_application_development.jpg',
                'main_image' => 'frontAssets/images/services/web_application_development.jpg',
                'total_projects' => 18,
                'icon' => 'fa-pen-ruler',
                'is_featured' => '1',
            ],
            [
                'name' => 'Frontend Development',
                'slug' => Str::slug('Frontend Development'),
                'meta_title' => 'Professional Frontend Development Services | Responsive Web Interfaces',
                'meta_description' => 'Expert frontend development with HTML5, CSS3, Bootstrap 5, and JavaScript. Create engaging user experiences with mobile-first responsive designs.',
                'details' => '<h2>Crafting Exceptional User Experiences</h2>
                        <p>We transform designs into pixel-perfect, responsive web interfaces using cutting-edge frontend technologies:</p>

                        <h3>Core Technologies:</h3>
                        <ul>
                            <li>HTML5 semantic markup</li>
                            <li>CSS3 animations and transitions</li>
                            <li>Bootstrap 5 framework customization</li>
                            <li>JavaScript (ES6+) functionality</li>
                            <li>Cross-browser compatibility</li>
                        </ul>

                        <h3>Key Features:</h3>
                        <ul>
                            <li>Mobile-first responsive design</li>
                            <li>Progressive Web App (PWA) capabilities</li>
                            <li>Accessibility (WCAG 2.1 compliance)</li>
                            <li>Performance optimization</li>
                            <li>CSS preprocessors (Sass/SCSS)</li>
                        </ul>

                        <h3>Our Development Process:</h3>
                        <ol>
                            <li>UI/UX design analysis</li>
                            <li>Responsive breakpoint planning</li>
                            <li>Component-based development</li>
                            <li>Cross-device testing</li>
                            <li>Performance auditing (Lighthouse)</li>
                        </ol>

                        <h3>Optimization Techniques:</h3>
                        <ul>
                            <li>Critical CSS inlining</li>
                            <li>Lazy loading images</li>
                            <li>Code splitting and minification</li>
                            <li>Browser caching strategies</li>
                            <li>CDN implementation</li>
                        </ul>

                        <p>We implement modern tools like Webpack, Babel, and Gulp for efficient build processes.</p>',
                'meta_image' => 'frontAssets/images/services/frontend_development.jpg',
                'main_image' => 'frontAssets/images/services/frontend_development.jpg',
                'total_projects' => 12,
                'icon' => 'fa-bezier-curve',
                'is_featured' => '1',
            ],
            [
                'name' => 'Backend Development',
                'slug' => Str::slug('Backend Development'),
                'meta_title' => 'Expert Laravel Backend Development Services | Secure & Scalable APIs',
                'meta_description' => 'Professional Laravel backend development services. Build secure, scalable REST APIs and robust web applications with PHP experts.',
                'details' => '<h2>Robust Backend Solutions with Laravel</h2>
                        <p>We develop secure and scalable backend systems using Laravel PHP framework:</p>

                        <h3>Core Services:</h3>
                        <ul>
                            <li>Custom REST API development</li>
                            <li>Database architecture design</li>
                            <li>Authentication system implementation</li>
                            <li>Payment processing integration</li>
                            <li>Legacy system modernization</li>
                        </ul>

                        <h3>Laravel Expertise:</h3>
                        <ul>
                            <li>Eloquent ORM optimization</li>
                            <li>Queue management (Redis/Horizon)</li>
                            <li>API resource development</li>
                            <li>Laravel Nova administration panels</li>
                            <li>Package development</li>
                        </ul>

                        <h3>Security Features:</h3>
                        <ul>
                            <li>CSRF protection</li>
                            <li>SQL injection prevention</li>
                            <li>XSS protection</li>
                            <li>Rate limiting and throttling</li>
                            <li>Two-factor authentication</li>
                        </ul>

                        <h3>Performance Optimization:</h3>
                        <ul>
                            <li>Eager loading optimization</li>
                            <li>Query caching</li>
                            <li>PHP OPcache configuration</li>
                            <li>Background job processing</li>
                            <li>Horizontal scaling strategies</li>
                        </ul>

                        <p>We implement testing suites with PHPUnit and follow PSR standards for clean, maintainable code.</p>',
                'meta_image' => 'frontAssets/images/services/backend_development.jpg',
                'main_image' => 'frontAssets/images/services/backend_development.jpg',
                'total_projects' => 16,
                'icon' => 'fa-lightbulb',
                'is_featured' => '1',
            ],
            [
                'name' => 'Database Optimization',
                'slug' => Str::slug('Database Optimization'),
                'meta_title' => 'MySQL Database Design & Optimization Services | Scalable Data Solutions',
                'meta_description' => 'Professional MySQL database design, optimization, and maintenance services. Ensure data integrity and high performance for your applications.',
                'details' => '<h2>Optimized Database Solutions for Peak Performance</h2>
                            <p>We design and optimize MySQL databases for reliability and speed:</p>

                            <h3>Our Services Include:</h3>
                            <ul>
                                <li>Database schema design</li>
                                <li>Query optimization</li>
                                <li>Indexing strategies</li>
                                <li>Data migration services</li>
                                <li>Replication and clustering</li>
                            </ul>

                            <h3>Design Process:</h3>
                            <ol>
                                <li>Requirement analysis</li>
                                <li>Entity-Relationship diagramming</li>
                                <li>Normalization (3NF/BCNF)</li>
                                <li>Denormalization for performance</li>
                                <li>Stored procedure development</li>
                            </ol>

                            <h3>Optimization Techniques:</h3>
                            <ul>
                                <li>EXPLAIN query analysis</li>
                                <li>Index optimization</li>
                                <li>Query caching</li>
                                <li>Partitioning large tables</li>
                                <li>Connection pooling</li>
                            </ul>

                            <h3>Advanced Features:</h3>
                            <ul>
                                <li>Full-text search implementation</li>
                                <li>GIS data handling</li>
                                <li>JSON data type utilization</li>
                                <li>Trigger and event scheduling</li>
                                <li>Backup and recovery strategies</li>
                            </ul>

                            <p>We implement monitoring with tools like Percona Monitoring and Management for database health.</p>',
                'meta_image' => 'frontAssets/images/services/database.png',
                'main_image' => 'frontAssets/images/services/database.png',
                'total_projects' => 9,
                'icon' => 'fa-envelope',
                'is_featured' => '0',
            ],
            [
                'name' => 'AJAX & API Integration',
                'slug' => Str::slug('AJAX API Integration'),
                'meta_title' => 'AJAX & API Integration Services | Seamless Third-Party Integrations',
                'meta_description' => 'Professional AJAX implementation and API integration services. Connect your application with payment gateways, social media, and SaaS platforms.',
                'details' => '<h2>Seamless System Integration Solutions</h2>
                        <p>We implement dynamic AJAX features and API integrations to enhance application functionality:</p>

                        <h3>Integration Services:</h3>
                        <ul>
                            <li>Payment gateway integration (Stripe, PayPal)</li>
                            <li>Social media API connections</li>
                            <li>Google Maps integration</li>
                            <li>Cloud storage integration (AWS S3, Dropbox)</li>
                            <li>SaaS platform integration</li>
                        </ul>

                        <h3>AJAX Implementation:</h3>
                        <ul>
                            <li>Dynamic content loading</li>
                            <li>Form submission handling</li>
                            <li>Real-time search functionality</li>
                            <li>Interactive data visualization</li>
                            <li>File upload progress tracking</li>
                        </ul>

                        <h3>API Development Features:</h3>
                        <ul>
                            <li>RESTful API design</li>
                            <li>GraphQL implementation</li>
                            <li>Webhook configuration</li>
                            <li>OAuth 2.0 authentication</li>
                            <li>Rate limiting and versioning</li>
                        </ul>

                        <h3>Tools & Technologies:</h3>
                        <ul>
                            <li>Axios for HTTP requests</li>
                            <li>Postman for API testing</li>
                            <li>Swagger/OpenAPI documentation</li>
                            <li>JWT authentication</li>
                            <li>WebSocket implementation</li>
                        </ul>

                        <p>We ensure secure data transmission with SSL encryption and proper authentication mechanisms.</p>',
                'meta_image' => 'frontAssets/images/services/jquery_ajax.jpg',
                'main_image' => 'frontAssets/images/services/jquery_ajax.jpg',
                'total_projects' => 14,
                'icon' => 'fa-envelope',
                'is_featured' => '0',
            ],
            [
                'name' => 'Vue.js SPA',
                'slug' => Str::slug('Vuejs SPA Development'),
                'meta_title' => 'Vue.js SPA Development Services | Modern Web Applications',
                'meta_description' => 'Professional Vue.js single page application development. Build fast, interactive web applications with Vue 3 composition API.',
                'details' => '<h2>Modern Single Page Applications with Vue.js</h2>
                        <p>We create high-performance Vue.js applications with rich interactivity:</p>

                        <h3>Core Features:</h3>
                        <ul>
                            <li>Vue 3 Composition API</li>
                            <li>Vue Router implementation</li>
                            <li>Vuex state management</li>
                            <li>Server-side rendering (Nuxt.js)</li>
                            <li>Component-based architecture</li>
                        </ul>

                        <h3>Development Process:</h3>
                        <ol>
                            <li>Application architecture planning</li>
                            <li>Vue component tree design</li>
                            <li>State management strategy</li>
                            <li>API integration</li>
                            <li>Performance optimization</li>
                        </ol>

                        <h3>Key Benefits:</h3>
                        <ul>
                            <li>Fast initial load times</li>
                            <li>Smooth page transitions</li>
                            <li>Offline capabilities (PWA)</li>
                            <li>SEO-friendly implementations</li>
                            <li>Reusable component library</li>
                        </ul>

                        <h3>Advanced Implementations:</h3>
                        <ul>
                            <li>Real-time features with WebSocket</li>
                            <li>Internationalization (i18n)</li>
                            <li>Dynamic form validation</li>
                            <li>Chart and data visualization</li>
                            <li>Authentication flows</li>
                        </ul>

                        <p>We use modern tools like Vite, Pinia, and Vue Test Utils for efficient development and testing.</p>',
                'meta_image' => 'frontAssets/images/services/vuejs.png',
                'main_image' => 'frontAssets/images/services/vuejs.png',
                'total_projects' => 10,
                'icon' => 'fa-envelope',
                'is_featured' => '1',
            ]
        ];

        foreach ($services as $service) {
            CompanyService::create($service);
        }
    }
}
