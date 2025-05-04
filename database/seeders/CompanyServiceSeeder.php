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
                'details' => '<p class="" data-start="226" data-end="578">In today\'s fast-paced digital world, off-the-shelf software often falls short in meeting the specific needs of growing businesses. That\'s where <strong data-start="370" data-end="397">custom web applications</strong> come in. At [Your Company Name], we specialize in building tailored web solutions that optimize operations, automate workflows, and empower your organization to scale effortlessly.</p>
                                <p class="" data-start="580" data-end="764">Whether you\'re a startup looking to build from scratch or an enterprise aiming to modernize legacy systems, our team provides end-to-end development services that deliver real results.</p>
                                <hr class="" data-start="766" data-end="769">
                                <h2 class="" data-start="771" data-end="790">🚀 What We Offer</h2>
                                <p class="" data-start="792" data-end="923">We design and develop robust, scalable web applications built around your unique business requirements. Our core offerings include:</p>
                                <ul data-start="925" data-end="1588">
                                <li class="" data-start="925" data-end="1042">
                                <p class="" data-start="927" data-end="1042"><strong data-start="927" data-end="972">Enterprise-Grade Application Architecture</strong><br data-start="972" data-end="975">Designed for security, scalability, and long-term sustainability.</p>
                                </li>
                                <li class="" data-start="1044" data-end="1195">
                                <p class="" data-start="1046" data-end="1195"><strong data-start="1046" data-end="1084">Custom Workflow Automation Systems</strong><br data-start="1084" data-end="1087">Eliminate manual tasks and improve operational efficiency with automated logic tailored to your processes.</p>
                                </li>
                                <li class="" data-start="1197" data-end="1318">
                                <p class="" data-start="1199" data-end="1318"><strong data-start="1199" data-end="1233">Inventory Management Solutions</strong><br data-start="1233" data-end="1236">Monitor, track, and manage inventory with real-time data and intelligent alerts.</p>
                                </li>
                                <li class="" data-start="1320" data-end="1444">
                                <p class="" data-start="1322" data-end="1444"><strong data-start="1322" data-end="1356">CRM and ERP System Development</strong><br data-start="1356" data-end="1359">Fully-integrated platforms that centralize data and drive informed decision-making.</p>
                                </li>
                                <li class="" data-start="1446" data-end="1588">
                                <p class="" data-start="1448" data-end="1588"><strong data-start="1448" data-end="1481">Real-Time Collaboration Tools</strong><br data-start="1481" data-end="1484">Enable seamless team communication with chat, file sharing, and synchronized task management features.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="1590" data-end="1593">
                                <h2 class="" data-start="1595" data-end="1624">🔧 Our Technical Expertise</h2>
                                <p class="" data-start="1626" data-end="1749">Our development team combines modern frameworks and best practices to create high-performing web applications. We excel in:</p>
                                <ul data-start="1751" data-end="2342">
                                <li class="" data-start="1751" data-end="1853">
                                <p class="" data-start="1753" data-end="1853"><strong data-start="1753" data-end="1787">Laravel-Based MVC Architecture</strong><br data-start="1787" data-end="1790">A robust PHP framework that ensures clean, maintainable code.</p>
                                </li>
                                <li class="" data-start="1855" data-end="1973">
                                <p class="" data-start="1857" data-end="1973"><strong data-start="1857" data-end="1898">Vue.js Powered Interactive Dashboards</strong><br data-start="1898" data-end="1901">Build fast and responsive interfaces that enhance the user experience.</p>
                                </li>
                                <li class="" data-start="1975" data-end="2088">
                                <p class="" data-start="1977" data-end="2088"><strong data-start="1977" data-end="2017">MySQL Database Design &amp; Optimization</strong><br data-start="2017" data-end="2020">Reliable and secure data structures that scale with your business.</p>
                                </li>
                                <li class="" data-start="2090" data-end="2217">
                                <p class="" data-start="2092" data-end="2217"><strong data-start="2092" data-end="2124">Third-Party API Integrations</strong><br data-start="2124" data-end="2127">Connect your application to leading platforms like Stripe, PayPal, Salesforce, and more.</p>
                                </li>
                                <li class="" data-start="2219" data-end="2342">
                                <p class="" data-start="2221" data-end="2342"><strong data-start="2221" data-end="2248">Cloud-Ready Deployments</strong><br data-start="2248" data-end="2251">Efficient deployment strategies using AWS, DigitalOcean, and other major cloud providers.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="2344" data-end="2347">
                                <h2 class="" data-start="2349" data-end="2385">🔄 Full-Cycle Development Process</h2>
                                <p class="" data-start="2387" data-end="2502">We follow a structured and transparent development lifecycle to ensure your project\'s success from start to finish:</p>
                                <ol data-start="2504" data-end="3117">
                                <li class="" data-start="2504" data-end="2633">
                                <p class="" data-start="2507" data-end="2633"><strong data-start="2507" data-end="2544">Requirement Analysis and Planning</strong><br data-start="2544" data-end="2547">Understand your goals, define technical specs, and map out a clear project roadmap.</p>
                                </li>
                                <li class="" data-start="2635" data-end="2734">
                                <p class="" data-start="2638" data-end="2734"><strong data-start="2638" data-end="2659">UI/UX Prototyping</strong><br data-start="2659" data-end="2662">Craft intuitive wireframes and visual prototypes for user validation.</p>
                                </li>
                                <li class="" data-start="2736" data-end="2865">
                                <p class="" data-start="2739" data-end="2865"><strong data-start="2739" data-end="2768">Agile Development Sprints</strong><br data-start="2768" data-end="2771">Deliver features iteratively, allowing for flexibility and feedback throughout the process.</p>
                                </li>
                                <li class="" data-start="2867" data-end="2982">
                                <p class="" data-start="2870" data-end="2982"><strong data-start="2870" data-end="2899">Quality Assurance Testing</strong><br data-start="2899" data-end="2902">Rigorously test every component for functionality, security, and performance.</p>
                                </li>
                                <li class="" data-start="2984" data-end="3117">
                                <p class="" data-start="2987" data-end="3117"><strong data-start="2987" data-end="3025">Deployment and Ongoing Maintenance</strong><br data-start="3025" data-end="3028">Launch with confidence and enjoy continuous support to keep your app running smoothly.</p>
                                </li>
                                </ol>
                                <hr class="" data-start="3119" data-end="3122">
                                <h2 class="" data-start="3124" data-end="3179">⚙️ Powerful Features Built for Modern Business Needs</h2>
                                <p class="" data-start="3181" data-end="3293">Our custom web applications are equipped with a comprehensive set of features that future-proof your operations:</p>
                                <ul data-start="3295" data-end="3882">
                                <li class="" data-start="3295" data-end="3412">
                                <p class="" data-start="3297" data-end="3412"><strong data-start="3297" data-end="3333">Role-Based Access Control (RBAC)</strong><br data-start="3333" data-end="3336">Manage user permissions and ensure data security across your organization.</p>
                                </li>
                                <li class="" data-start="3414" data-end="3516">
                                <p class="" data-start="3416" data-end="3516"><strong data-start="3416" data-end="3445">Multi-Tenant Architecture</strong><br data-start="3445" data-end="3448">Serve multiple clients or branches from a single, secure platform.</p>
                                </li>
                                <li class="" data-start="3518" data-end="3640">
                                <p class="" data-start="3520" data-end="3640"><strong data-start="3520" data-end="3551">Payment Gateway Integration</strong><br data-start="3551" data-end="3554">Accept online payments securely with integrations like Stripe, PayPal, and Razorpay.</p>
                                </li>
                                <li class="" data-start="3642" data-end="3756">
                                <p class="" data-start="3644" data-end="3756"><strong data-start="3644" data-end="3675">Automated Reporting Systems</strong><br data-start="3675" data-end="3678">Generate real-time analytics and business intelligence dashboards with ease.</p>
                                </li>
                                <li class="" data-start="3758" data-end="3882">
                                <p class="" data-start="3760" data-end="3882"><strong data-start="3760" data-end="3792">Cross-Platform Compatibility</strong><br data-start="3792" data-end="3795">Access your application from desktops, tablets, and mobile devices&mdash;anytime, anywhere.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="3884" data-end="3887">
                                <h2 class="" data-start="3889" data-end="3906">Why Choose Us?</h2>
                                <p class="" data-start="3908" data-end="4154">✅ Custom solutions tailored to your business goals<br data-start="3958" data-end="3961">✅ Expert team with proven technical proficiency<br data-start="4008" data-end="4011">✅ Agile methodology for faster time to market<br data-start="4056" data-end="4059">✅ Transparent communication and regular updates<br data-start="4106" data-end="4109">✅ Post-launch support and scalability options</p>
                                <hr class="" data-start="4156" data-end="4159">
                                <h3 class="" data-start="4161" data-end="4208">Ready to Build the Future of Your Business?</h3>
                                <p class="" data-start="4210" data-end="4409">Let&rsquo;s work together to create a custom web application that sets your business apart. Contact us today for a free consultation and discover how we can turn your ideas into powerful digital solutions.</p>',
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
                'details' => '<p class="" data-start="226" data-end="583">In a world where digital experiences shape brand perception, <strong data-start="287" data-end="347">exceptional user interface (UI) and user experience (UX)</strong> design can make or break your online presence. We bridge the gap between stunning design and flawless functionality, transforming concepts into responsive, high-performing web interfaces that engage and convert.</p>
                                <p class="" data-start="585" data-end="769">Whether you\'re building a landing page, web app, or a full-scale enterprise interface, we use the latest frontend technologies to bring your vision to life&mdash;beautifully and effectively.</p>
                                <hr class="" data-start="771" data-end="774">
                                <h2 class="" data-start="776" data-end="816">💡 Cutting-Edge Frontend Technologies</h2>
                                <p class="" data-start="818" data-end="941">We specialize in building fast, visually stunning, and user-friendly interfaces with industry-leading tools and frameworks:</p>
                                <ul data-start="943" data-end="1515">
                                <li class="" data-start="943" data-end="1039">
                                <p class="" data-start="945" data-end="1039"><strong data-start="945" data-end="970">HTML5 Semantic Markup</strong><br data-start="970" data-end="973">Clean, well-structured code that improves accessibility and SEO.</p>
                                </li>
                                <li class="" data-start="1041" data-end="1167">
                                <p class="" data-start="1043" data-end="1167"><strong data-start="1043" data-end="1078">CSS3 Animations and Transitions</strong><br data-start="1078" data-end="1081">Smooth visual effects that enhance user engagement without compromising performance.</p>
                                </li>
                                <li class="" data-start="1169" data-end="1277">
                                <p class="" data-start="1171" data-end="1277"><strong data-start="1171" data-end="1210">Bootstrap 5 Framework Customization</strong><br data-start="1210" data-end="1213">Rapid UI development with a consistent, mobile-first approach.</p>
                                </li>
                                <li class="" data-start="1279" data-end="1387">
                                <p class="" data-start="1281" data-end="1387"><strong data-start="1281" data-end="1316">JavaScript (ES6+) Functionality</strong><br data-start="1316" data-end="1319">Modern, efficient scripting that powers dynamic user interactions.</p>
                                </li>
                                <li class="" data-start="1389" data-end="1515">
                                <p class="" data-start="1391" data-end="1515"><strong data-start="1391" data-end="1422">Cross-Browser Compatibility</strong><br data-start="1422" data-end="1425">Ensuring your interface works seamlessly across Chrome, Firefox, Safari, Edge, and more.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="1517" data-end="1520">
                                <h2 class="" data-start="1522" data-end="1560">📱 Key Frontend Features We Deliver</h2>
                                <p class="" data-start="1562" data-end="1680">We go beyond just design implementation&mdash;our frontend solutions are built for real-world performance and accessibility:</p>
                                <ul data-start="1682" data-end="2287">
                                <li class="" data-start="1682" data-end="1793">
                                <p class="" data-start="1684" data-end="1793"><strong data-start="1684" data-end="1718">Mobile-First Responsive Design</strong><br data-start="1718" data-end="1721">Interfaces that adapt beautifully across all screen sizes and devices.</p>
                                </li>
                                <li class="" data-start="1795" data-end="1932">
                                <p class="" data-start="1797" data-end="1932"><strong data-start="1797" data-end="1839">Progressive Web App (PWA) Capabilities</strong><br data-start="1839" data-end="1842">Offline access, fast load times, and installable experiences that feel like native apps.</p>
                                </li>
                                <li class="" data-start="1934" data-end="2055">
                                <p class="" data-start="1936" data-end="2055"><strong data-start="1936" data-end="1975">Accessibility Compliance (WCAG 2.1)</strong><br data-start="1975" data-end="1978">Inclusive design practices that meet international accessibility standards.</p>
                                </li>
                                <li class="" data-start="2057" data-end="2172">
                                <p class="" data-start="2059" data-end="2172"><strong data-start="2059" data-end="2087">Performance Optimization</strong><br data-start="2087" data-end="2090">Lightning-fast load times through advanced coding and asset handling techniques.</p>
                                </li>
                                <li class="" data-start="2174" data-end="2287">
                                <p class="" data-start="2176" data-end="2287"><strong data-start="2176" data-end="2209">CSS Preprocessors (Sass/SCSS)</strong><br data-start="2209" data-end="2212">Maintainable, scalable stylesheets for modular and efficient development.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="2289" data-end="2292">
                                <h2 class="" data-start="2294" data-end="2332">🔁 Our Frontend Development Process</h2>
                                <p class="" data-start="2334" data-end="2440">We follow a systematic approach to building interfaces that perform flawlessly in real-world environments:</p>
                                <ol data-start="2442" data-end="3027">
                                <li class="" data-start="2442" data-end="2553">
                                <p class="" data-start="2445" data-end="2553"><strong data-start="2445" data-end="2470">UI/UX Design Analysis</strong><br data-start="2470" data-end="2473">We analyze design assets for feasibility, usability, and interaction mapping.</p>
                                </li>
                                <li class="" data-start="2555" data-end="2661">
                                <p class="" data-start="2558" data-end="2661"><strong data-start="2558" data-end="2592">Responsive Breakpoint Planning</strong><br data-start="2592" data-end="2595">Define adaptive layouts for desktops, tablets, and smartphones.</p>
                                </li>
                                <li class="" data-start="2663" data-end="2772">
                                <p class="" data-start="2666" data-end="2772"><strong data-start="2666" data-end="2697">Component-Based Development</strong><br data-start="2697" data-end="2700">Reusable and maintainable frontend components using modern practices.</p>
                                </li>
                                <li class="" data-start="2774" data-end="2892">
                                <p class="" data-start="2777" data-end="2892"><strong data-start="2777" data-end="2817">Cross-Device &amp; Cross-Browser Testing</strong><br data-start="2817" data-end="2820">Ensure consistency and functionality across environments and devices.</p>
                                </li>
                                <li class="" data-start="2894" data-end="3027">
                                <p class="" data-start="2897" data-end="3027"><strong data-start="2897" data-end="2934">Performance Auditing (Lighthouse)</strong><br data-start="2934" data-end="2937">Identify bottlenecks and fine-tune performance using Google Lighthouse and other tools.</p>
                                </li>
                                </ol>
                                <hr class="" data-start="3029" data-end="3032">
                                <h2 class="" data-start="3034" data-end="3070">⚙️ Optimization Techniques We Use</h2>
                                <p class="" data-start="3072" data-end="3196">We implement advanced optimization strategies to make sure your web interfaces are not only beautiful but also blazing fast:</p>
                                <ul data-start="3198" data-end="3700">
                                <li class="" data-start="3198" data-end="3295">
                                <p class="" data-start="3200" data-end="3295"><strong data-start="3200" data-end="3225">Critical CSS Inlining</strong><br data-start="3225" data-end="3228">Load essential styles first to improve perceived page load speed.</p>
                                </li>
                                <li class="" data-start="3297" data-end="3393">
                                <p class="" data-start="3299" data-end="3393"><strong data-start="3299" data-end="3322">Lazy Loading Images</strong><br data-start="3322" data-end="3325">Load visuals only when they&rsquo;re needed, reducing initial load time.</p>
                                </li>
                                <li class="" data-start="3395" data-end="3502">
                                <p class="" data-start="3397" data-end="3502"><strong data-start="3397" data-end="3432">Code Splitting and Minification</strong><br data-start="3432" data-end="3435">Serve only the code that&rsquo;s necessary while minimizing file sizes.</p>
                                </li>
                                <li class="" data-start="3504" data-end="3600">
                                <p class="" data-start="3506" data-end="3600"><strong data-start="3506" data-end="3536">Browser Caching Strategies</strong><br data-start="3536" data-end="3539">Store frequently used resources locally for faster reloads.</p>
                                </li>
                                <li class="" data-start="3602" data-end="3700">
                                <p class="" data-start="3604" data-end="3700"><strong data-start="3604" data-end="3626">CDN Implementation</strong><br data-start="3626" data-end="3629">Distribute assets globally for lower latency and higher availability.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="3702" data-end="3705">
                                <h2 class="" data-start="3707" data-end="3753">🛠️ Tools That Power Our Frontend Workflows</h2>
                                <p class="" data-start="3755" data-end="3850">We leverage modern development tools to ensure efficient, scalable, and future-ready codebases:</p>
                                <ul data-start="3852" data-end="4067">
                                <li class="" data-start="3852" data-end="3923">
                                <p class="" data-start="3854" data-end="3923"><strong data-start="3854" data-end="3865">Webpack</strong> &ndash; Bundling assets and managing dependencies efficiently</p>
                                </li>
                                <li class="" data-start="3924" data-end="3993">
                                <p class="" data-start="3926" data-end="3993"><strong data-start="3926" data-end="3935">Babel</strong> &ndash; Transpiling ES6+ code to ensure browser compatibility</p>
                                </li>
                                <li class="" data-start="3994" data-end="4067">
                                <p class="" data-start="3996" data-end="4067"><strong data-start="3996" data-end="4004">Gulp</strong> &ndash; Task automation for building, compiling, and minifying files</p>
                                </li>
                                </ul>
                                <hr class="" data-start="4069" data-end="4072">
                                <h2 class="" data-start="4074" data-end="4116">Why Choose Us for Frontend Development?</h2>
                                <p class="" data-start="4118" data-end="4404">✅ Pixel-perfect implementations from design to code<br data-start="4169" data-end="4172">✅ Fully responsive and optimized for every screen<br data-start="4221" data-end="4224">✅ Accessible and compliant with global standards<br data-start="4272" data-end="4275">✅ Built for performance, scalability, and ease of maintenance<br data-start="4336" data-end="4339">✅ End-to-end frontend solutions with seamless backend integration</p>
                                <hr class="" data-start="4406" data-end="4409">
                                <h3 class="" data-start="4411" data-end="4459">Let\'s Build a Better Web Experience Together</h3>
                                <p class="" data-start="4461" data-end="4680">If you\'re looking to elevate your digital product with fast, responsive, and accessible frontend development, we&rsquo;re here to help. <strong data-start="4591" data-end="4613">Get in touch today</strong> to transform your UI/UX designs into exceptional user experiences.</p>',
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
                'details' => '<p class="" data-start="205" data-end="483">A powerful and scalable backend is the foundation of any modern web application. We specialize in building high-performance backend systems using the Laravel PHP framework&mdash;one of the most secure, elegant, and developer-friendly platforms available today.</p>
                                <p class="" data-start="485" data-end="681">Whether you\'re launching a new application or modernizing legacy infrastructure, our Laravel backend solutions are designed to deliver reliability, security, and scalability for long-term success.</p>
                                <hr class="" data-start="683" data-end="686">
                                <h2 class="" data-start="688" data-end="715">🔧 Core Backend Services</h2>
                                <p class="" data-start="717" data-end="814">We provide a comprehensive suite of backend development services tailored to your business needs:</p>
                                <ul data-start="816" data-end="1433">
                                <li class="" data-start="816" data-end="937">
                                <p class="" data-start="818" data-end="937"><strong data-start="818" data-end="849">Custom REST API Development</strong><br data-start="849" data-end="852">Build scalable and secure APIs for mobile apps, SPAs, and third-party integrations.</p>
                                </li>
                                <li class="" data-start="939" data-end="1068">
                                <p class="" data-start="941" data-end="1068"><strong data-start="941" data-end="973">Database Architecture Design</strong><br data-start="973" data-end="976">Structured, optimized databases using Laravel migrations and schema design best practices.</p>
                                </li>
                                <li class="" data-start="1070" data-end="1198">
                                <p class="" data-start="1072" data-end="1198"><strong data-start="1072" data-end="1112">Authentication System Implementation</strong><br data-start="1112" data-end="1115">Secure login, registration, password reset, and role-based access control (RBAC).</p>
                                </li>
                                <li class="" data-start="1200" data-end="1320">
                                <p class="" data-start="1202" data-end="1320"><strong data-start="1202" data-end="1236">Payment Processing Integration</strong><br data-start="1236" data-end="1239">Seamlessly connect to payment gateways like Stripe, PayPal, Razorpay, and more.</p>
                                </li>
                                <li class="" data-start="1322" data-end="1433">
                                <p class="" data-start="1324" data-end="1433"><strong data-start="1324" data-end="1355">Legacy System Modernization</strong><br data-start="1355" data-end="1358">Rebuild or integrate outdated systems using Laravel\'s robust feature set.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="1435" data-end="1438">
                                <h2 class="" data-start="1440" data-end="1468">🧠 Deep Laravel Expertise</h2>
                                <p class="" data-start="1470" data-end="1585">Our development team leverages the full power of Laravel&rsquo;s ecosystem to deliver fast, maintainable backend systems:</p>
                                <ul data-start="1587" data-end="2163">
                                <li class="" data-start="1587" data-end="1698">
                                <p class="" data-start="1589" data-end="1698"><strong data-start="1589" data-end="1618">Eloquent ORM Optimization</strong><br data-start="1618" data-end="1621">Streamlined database interactions with optimized queries and relationships.</p>
                                </li>
                                <li class="" data-start="1700" data-end="1829">
                                <p class="" data-start="1702" data-end="1829"><strong data-start="1702" data-end="1738">Queue Management (Redis/Horizon)</strong><br data-start="1738" data-end="1741">Efficient background job processing for emails, notifications, and long-running tasks.</p>
                                </li>
                                <li class="" data-start="1831" data-end="1934">
                                <p class="" data-start="1833" data-end="1934"><strong data-start="1833" data-end="1861">API Resource Development</strong><br data-start="1861" data-end="1864">Structured, versioned API responses for consistency and flexibility.</p>
                                </li>
                                <li class="" data-start="1936" data-end="2047">
                                <p class="" data-start="1938" data-end="2047"><strong data-start="1938" data-end="1976">Laravel Nova Administration Panels</strong><br data-start="1976" data-end="1979">Custom admin dashboards for efficient content and user management.</p>
                                </li>
                                <li class="" data-start="2049" data-end="2163">
                                <p class="" data-start="2051" data-end="2163"><strong data-start="2051" data-end="2081">Custom Package Development</strong><br data-start="2081" data-end="2084">Extend Laravel functionality with reusable packages tailored to your project.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="2165" data-end="2168">
                                <h2 class="" data-start="2170" data-end="2208">🔐 Built-In Security Best Practices</h2>
                                <p class="" data-start="2210" data-end="2316">We implement Laravel&rsquo;s security features and industry best practices to protect your application and data:</p>
                                <ul data-start="2318" data-end="2782">
                                <li class="" data-start="2318" data-end="2397">
                                <p class="" data-start="2320" data-end="2397"><strong data-start="2320" data-end="2339">CSRF Protection</strong><br data-start="2339" data-end="2342">Safeguard against cross-site request forgery attacks.</p>
                                </li>
                                <li class="" data-start="2399" data-end="2484">
                                <p class="" data-start="2401" data-end="2484"><strong data-start="2401" data-end="2429">SQL Injection Prevention</strong><br data-start="2429" data-end="2432">Use parameterized queries and Eloquent safeguards.</p>
                                </li>
                                <li class="" data-start="2486" data-end="2586">
                                <p class="" data-start="2488" data-end="2586"><strong data-start="2488" data-end="2506">XSS Protection</strong><br data-start="2506" data-end="2509">Sanitize and encode output to prevent cross-site scripting vulnerabilities.</p>
                                </li>
                                <li class="" data-start="2588" data-end="2683">
                                <p class="" data-start="2590" data-end="2683"><strong data-start="2590" data-end="2622">Rate Limiting and Throttling</strong><br data-start="2622" data-end="2625">Protect APIs and login systems from brute-force attacks.</p>
                                </li>
                                <li class="" data-start="2685" data-end="2782">
                                <p class="" data-start="2687" data-end="2782"><strong data-start="2687" data-end="2722">Two-Factor Authentication (2FA)</strong><br data-start="2722" data-end="2725">Add an extra layer of security for user authentication.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="2784" data-end="2787">
                                <h2 class="" data-start="2789" data-end="2829">⚡ Performance Optimization Techniques</h2>
                                <p class="" data-start="2831" data-end="2906">We ensure your Laravel application is fast, responsive, and ready to scale:</p>
                                <ul data-start="2908" data-end="3403">
                                <li class="" data-start="2908" data-end="2998">
                                <p class="" data-start="2910" data-end="2998"><strong data-start="2910" data-end="2940">Eager Loading Optimization</strong><br data-start="2940" data-end="2943">Minimize N+1 queries for faster database performance.</p>
                                </li>
                                <li class="" data-start="3000" data-end="3079">
                                <p class="" data-start="3002" data-end="3079"><strong data-start="3002" data-end="3019">Query Caching</strong><br data-start="3019" data-end="3022">Store results of frequent queries to reduce load times.</p>
                                </li>
                                <li class="" data-start="3081" data-end="3172">
                                <p class="" data-start="3083" data-end="3172"><strong data-start="3083" data-end="3112">PHP OPcache Configuration</strong><br data-start="3112" data-end="3115">Speed up code execution by caching precompiled scripts.</p>
                                </li>
                                <li class="" data-start="3174" data-end="3264">
                                <p class="" data-start="3176" data-end="3264"><strong data-start="3176" data-end="3205">Background Job Processing</strong><br data-start="3205" data-end="3208">Offload resource-intensive tasks using Laravel queues.</p>
                                </li>
                                <li class="" data-start="3266" data-end="3403">
                                <p class="" data-start="3268" data-end="3403"><strong data-start="3268" data-end="3301">Horizontal Scaling Strategies</strong><br data-start="3301" data-end="3304">Prepare your application to handle increased traffic with load balancers and distributed systems.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="3405" data-end="3408">
                                <h2 class="" data-start="3410" data-end="3448">🧪 Clean Code and Testing Standards</h2>
                                <p class="" data-start="3450" data-end="3545">We follow modern development standards to ensure reliability, maintainability, and scalability:</p>
                                <ul data-start="3547" data-end="3880">
                                <li class="" data-start="3547" data-end="3656">
                                <p class="" data-start="3549" data-end="3656"><strong data-start="3549" data-end="3590">Unit and Feature Testing with PHPUnit</strong><br data-start="3590" data-end="3593">Automated testing for consistent performance and reliability.</p>
                                </li>
                                <li class="" data-start="3658" data-end="3758">
                                <p class="" data-start="3660" data-end="3758"><strong data-start="3660" data-end="3688">PSR Standards Compliance</strong><br data-start="3688" data-end="3691">Adhere to PHP-FIG coding standards for clean, interoperable code.</p>
                                </li>
                                <li class="" data-start="3760" data-end="3880">
                                <p class="" data-start="3762" data-end="3880"><strong data-start="3762" data-end="3803">Version Control and CI/CD Integration</strong><br data-start="3803" data-end="3806">Use Git and automated pipelines for smooth deployment and collaboration.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="3882" data-end="3885">
                                <h2 class="" data-start="3887" data-end="3933">Why Choose Laravel for Backend Development?</h2>
                                <p class="" data-start="3935" data-end="4197">✅ Elegant syntax and expressive framework<br data-start="3976" data-end="3979">✅ Built-in support for routing, middleware, and security<br data-start="4035" data-end="4038">✅ Rich ecosystem with first-party tools like Nova, Passport, and Sanctum<br data-start="4110" data-end="4113">✅ Large community and long-term support<br data-start="4152" data-end="4155">✅ Ideal for startups and enterprises alike</p>
                                <hr class="" data-start="4199" data-end="4202">
                                <h3 class="" data-start="4204" data-end="4249">Let&rsquo;s Power Your Application with Laravel</h3>
                                <p class="" data-start="4251" data-end="4445">If you\'re ready to build a secure, scalable backend with Laravel, we\'re here to help. Contact us today to schedule a consultation and discover how our Laravel expertise can elevate your project.</p>',
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
                'details' => '<p class="" data-start="316" data-end="703">In a digital era where users expect speed, fluid interactions, and responsiveness, <strong data-start="399" data-end="434">Single Page Applications (SPAs)</strong> are the go-to solution for delivering seamless web experiences. We specialize in crafting high-performance SPAs using&nbsp;<strong data-start="577" data-end="587">Vue.js</strong>, a progressive JavaScript framework that powers some of the most intuitive and dynamic interfaces on the web today.</p>
                                <p class="" data-start="705" data-end="872">Whether you\'re building a custom dashboard, a PWA, or an enterprise-level front-end application, Vue.js helps us bring your ideas to life&mdash;faster, smarter, and cleaner.</p>
                                <hr class="" data-start="874" data-end="877">
                                <h2 class="" data-start="879" data-end="925">⚙️ Core Features of Our Vue.js Applications</h2>
                                <p class="" data-start="927" data-end="1028">We harness the latest capabilities of Vue.js and its ecosystem to build robust and feature-rich SPAs:</p>
                                <ul data-start="1030" data-end="1575">
                                <li class="" data-start="1030" data-end="1130">
                                <p class="" data-start="1032" data-end="1130"><strong data-start="1032" data-end="1057">Vue 3 Composition API</strong><br data-start="1057" data-end="1060">Cleaner, more scalable code with enhanced reactivity and modularity.</p>
                                </li>
                                <li class="" data-start="1132" data-end="1233">
                                <p class="" data-start="1134" data-end="1233"><strong data-start="1134" data-end="1163">Vue Router Implementation</strong><br data-start="1163" data-end="1166">Smooth, client-side routing for fast and dynamic page navigation.</p>
                                </li>
                                <li class="" data-start="1235" data-end="1336">
                                <p class="" data-start="1237" data-end="1336"><strong data-start="1237" data-end="1262">Vuex State Management</strong><br data-start="1262" data-end="1265">Centralized, predictable state handling for large-scale applications.</p>
                                </li>
                                <li class="" data-start="1338" data-end="1458">
                                <p class="" data-start="1340" data-end="1458"><strong data-start="1340" data-end="1375">Server-Side Rendering (Laravel)</strong><br data-start="1375" data-end="1378">Build SEO-friendly SPAs with enhanced performance and faster content delivery.</p>
                                </li>
                                <li class="" data-start="1460" data-end="1575">
                                <p class="" data-start="1462" data-end="1575"><strong data-start="1462" data-end="1494">Component-Based Architecture</strong><br data-start="1494" data-end="1497">Reusable and maintainable UI elements built for scalability and flexibility.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="1577" data-end="1580">
                                <h2 class="" data-start="1582" data-end="1618">🔄 Our Vue.js Development Process</h2>
                                <p class="" data-start="1620" data-end="1743">We follow a refined and collaborative workflow that ensures every SPA we develop is user-focused, scalable, and performant:</p>
                                <ol data-start="1745" data-end="2305">
                                <li class="" data-start="1745" data-end="1866">
                                <p class="" data-start="1748" data-end="1866"><strong data-start="1748" data-end="1785">Application Architecture Planning</strong><br data-start="1785" data-end="1788">Define a scalable structure tailored to your business logic and user goals.</p>
                                </li>
                                <li class="" data-start="1868" data-end="1969">
                                <p class="" data-start="1871" data-end="1969"><strong data-start="1871" data-end="1900">Vue Component Tree Design</strong><br data-start="1900" data-end="1903">Map out UI components for clarity, modularity, and reusability.</p>
                                </li>
                                <li class="" data-start="1971" data-end="2084">
                                <p class="" data-start="1974" data-end="2084"><strong data-start="1974" data-end="2003">State Management Strategy</strong><br data-start="2003" data-end="2006">Implement structured patterns using Vuex or Pinia for consistent data flow.</p>
                                </li>
                                <li class="" data-start="2086" data-end="2197">
                                <p class="" data-start="2089" data-end="2197"><strong data-start="2089" data-end="2108">API Integration</strong><br data-start="2108" data-end="2111">Connect seamlessly to backend systems or third-party services using Axios or Fetch.</p>
                                </li>
                                <li class="" data-start="2199" data-end="2305">
                                <p class="" data-start="2202" data-end="2305"><strong data-start="2202" data-end="2230">Performance Optimization</strong><br data-start="2230" data-end="2233">Improve loading speed, reduce bundle size, and enhance interactivity.</p>
                                </li>
                                </ol>
                                <hr class="" data-start="2307" data-end="2310">
                                <h2 class="" data-start="2312" data-end="2345">🚀 Key Benefits of Vue.js SPAs</h2>
                                <p class="" data-start="2347" data-end="2458">Our Vue.js-powered applications are not just functional&mdash;they&rsquo;re designed to deliver a superior user experience:</p>
                                <ul data-start="2460" data-end="3007">
                                <li class="" data-start="2460" data-end="2578">
                                <p class="" data-start="2462" data-end="2578"><strong data-start="2462" data-end="2489">Fast Initial Load Times</strong><br data-start="2489" data-end="2492">Code-splitting and optimized rendering ensure quick loading even on slower networks.</p>
                                </li>
                                <li class="" data-start="2580" data-end="2671">
                                <p class="" data-start="2582" data-end="2671"><strong data-start="2582" data-end="2609">Smooth Page Transitions</strong><br data-start="2609" data-end="2612">Animations and dynamic routing provide a native-app feel.</p>
                                </li>
                                <li class="" data-start="2673" data-end="2786">
                                <p class="" data-start="2675" data-end="2786"><strong data-start="2675" data-end="2705">Offline Capabilities (PWA)</strong><br data-start="2705" data-end="2708">Transform your SPA into an installable, offline-capable progressive web app.</p>
                                </li>
                                <li class="" data-start="2788" data-end="2902">
                                <p class="" data-start="2790" data-end="2902"><strong data-start="2790" data-end="2822">SEO-Friendly Implementations</strong><br data-start="2822" data-end="2825">Improve visibility on search engines using SSR or pre-rendering techniques.</p>
                                </li>
                                <li class="" data-start="2904" data-end="3007">
                                <p class="" data-start="2906" data-end="3007"><strong data-start="2906" data-end="2936">Reusable Component Library</strong><br data-start="2936" data-end="2939">Accelerate development with a modular, scalable component library.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="3009" data-end="3012">
                                <h2 class="" data-start="3014" data-end="3051">🧠 Advanced Vue.js Implementations</h2>
                                <p class="" data-start="3053" data-end="3152">We go beyond the basics to build interactive, real-time, and globally scalable Vue.js applications:</p>
                                <ul data-start="3154" data-end="3703">
                                <li class="" data-start="3154" data-end="3277">
                                <p class="" data-start="3156" data-end="3277"><strong data-start="3156" data-end="3193">Real-Time Features with WebSocket</strong><br data-start="3193" data-end="3196">Enable live notifications, chat, or dashboards with socket-based communication.</p>
                                </li>
                                <li class="" data-start="3279" data-end="3381">
                                <p class="" data-start="3281" data-end="3381"><strong data-start="3281" data-end="3312">Internationalization (i18n)</strong><br data-start="3312" data-end="3315">Deliver multilingual experiences with dynamic content switching.</p>
                                </li>
                                <li class="" data-start="3383" data-end="3486">
                                <p class="" data-start="3385" data-end="3486"><strong data-start="3385" data-end="3412">Dynamic Form Validation</strong><br data-start="3412" data-end="3415">Implement intelligent, responsive validation with real-time feedback.</p>
                                </li>
                                <li class="" data-start="3488" data-end="3600">
                                <p class="" data-start="3490" data-end="3600"><strong data-start="3490" data-end="3523">Charts and Data Visualization</strong><br data-start="3523" data-end="3526">Present complex data interactively using Chart.js, ApexCharts, or D3.js.</p>
                                </li>
                                <li class="" data-start="3602" data-end="3703">
                                <p class="" data-start="3604" data-end="3703"><strong data-start="3604" data-end="3628">Authentication Flows</strong><br data-start="3628" data-end="3631">Secure user access with JWT, OAuth2, or third-party auth integrations.</p>
                                </li>
                                </ul>
                                <hr class="" data-start="3705" data-end="3708">
                                <h2 class="" data-start="3710" data-end="3762">🛠️ Tools We Use for Efficient Vue.js Development</h2>
                                <p class="" data-start="3764" data-end="3861">To ensure quality, speed, and scalability, we rely on cutting-edge tools in the Vue.js ecosystem:</p>
                                <ul data-start="3863" data-end="4108">
                                <li class="" data-start="3863" data-end="3947">
                                <p class="" data-start="3865" data-end="3947"><strong data-start="3865" data-end="3873">Vite</strong> &ndash; Blazing-fast bundler for rapid development and hot module replacement</p>
                                </li>
                                <li class="" data-start="3948" data-end="4025">
                                <p class="" data-start="3950" data-end="4025"><strong data-start="3950" data-end="3959">Pinia</strong> &ndash; A lightweight and modern state management alternative to Vuex</p>
                                </li>
                                <li class="" data-start="4026" data-end="4108">
                                <p class="" data-start="4028" data-end="4108"><strong data-start="4028" data-end="4046">Vue Test Utils</strong> &ndash; Reliable testing suite for components and application logic</p>
                                </li>
                                </ul>
                                <hr class="" data-start="4110" data-end="4113">
                                <h2 class="" data-start="4115" data-end="4149">Why Build Your SPA with Vue.js?</h2>
                                <p class="" data-start="4151" data-end="4368">✅ Lightweight and easy to integrate<br data-start="4186" data-end="4189">✅ Scalable and modular architecture<br data-start="4224" data-end="4227">✅ Strong community and long-term support<br data-start="4267" data-end="4270">✅ Smooth developer experience for faster iteration<br data-start="4320" data-end="4323">✅ Great for both startups and enterprise apps</p>
                                <hr class="" data-start="4370" data-end="4373">
                                <h3 class="" data-start="4375" data-end="4419">Let&rsquo;s Build Your Next Vue.js Application</h3>
                                <p class="" data-start="4421" data-end="4621">Looking to create a modern, interactive web application with Vue.js? Let&rsquo;s talk. We&rsquo;ll help you design, build, and scale a custom Single Page Application that users love and your business can rely on.</p>',
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
