<?php

namespace App\Helpers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BusinessSetting;
use App\Models\CompanyService;
use App\Models\CompanySetting;
use App\Models\Counter;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Quote;
use App\Models\Skill;
use App\Models\SupportedCompany;
use App\Models\SystemSetting;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class Helper
{
    public static function dashboard_route()
    {
        $user = User::find(Auth::user()->id);
        $route = $user->role->role . '.dashboard';
        return $route;
    }
    public static function getLogoLight()
    {
        return CompanySetting::first()->light_logo ?? asset('assets/img/logo/default.svg');
    }
    public static function getLogoDark()
    {
        return CompanySetting::first()->dark_logo ?? asset('assets/img/logo/default.svg');
    }
    public static function getFavicon()
    {
        return CompanySetting::first()->favicon ?? asset('assets/img/favicon/favicon.ico');
    }
    public static function getCompanyName()
    {
        return CompanySetting::first()->company_name ?? env('APP_NAME');
    }
    public static function getCompanyAddress()
    {
        return CompanySetting::first()->address ?? '66 Broklyant, New York 3269';
    }
    public static function getCompanyCountry()
    {
        return CompanySetting::first()->country->name ?? 'USA';
    }
    public static function getCompanyEmail()
    {
        return CompanySetting::first()->email ?? 'test@gmail.com';
    }
    public static function getCompanyPhone()
    {
        $companySetting = CompanySetting::first();
        if($companySetting->country){
            return $companySetting->country->phone_code.' '.$companySetting->phone_number;
        }else{
            return '+0000000000000';
        }
    }
    public static function getTimezone()
    {
        $systemSetting = SystemSetting::with('timezone')->first();
        return $systemSetting->timezone->name ?? env('APP_TIMEZONE', 'UTC');
    }
    public static function getDefaultLanguage()
    {
        $systemSetting = SystemSetting::with('language')->first();
        return $systemSetting->language->iso_code ?? 'en';
    }
    public static function getfooterText()
    {
        return SystemSetting::first()->footer_text ?? 'All Copyrights Reserved';
    }
    public static function getMaxUploadSize()
    {
        $sizeInKB = SystemSetting::first()->max_upload_size ?? 2048; // Stored in KB

        return self::humanReadableSize($sizeInKB * 1024); // Convert KB to Bytes
    }

    // Helper function to format size into KB, MB, GB, etc.
    public static function humanReadableSize($bytes, $decimals = 2)
    {
        $sizes = ['B', 'KB', 'MB', 'GB', 'TB'];
        $factor = floor((strlen($bytes) - 1) / 3);

        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . $sizes[$factor];
    }


    // example use of currency format {{ \App\Helpers\Helper::formatCurrency($price) }}
    public static function formatCurrency($amount)
    {
        $currencySetting = SystemSetting::first();

        if (!$currencySetting) {
            return $amount; // Return the amount as is if settings are not found
        }

        $symbol = $currencySetting->currency_symbol;
        $position = $currencySetting->currency_symbol_position; // 'prefix' or 'postfix'

        if ($position === 'prefix') {
            return $symbol . $amount;
        }

        return $amount . $symbol;
    }

    public static function renderRecaptcha($formId, $action = 'register')
    {
        if (config('captcha.version') === 'v3') {
            return self::renderRecaptchaV3($formId, $action);
        }
    }

    private static function renderRecaptchaV3($formId, $action)
    {
        $siteKey = config('captcha.sitekey');
        return <<<HTML
            <script src="https://www.google.com/recaptcha/enterprise.js?render={$siteKey}"></script>
            <script>
                function handleRecaptcha(formId, action) {
                    document.getElementById(formId).addEventListener('submit', function(e) {
                        e.preventDefault();
                        grecaptcha.enterprise.ready(async () => {
                            try {
                                const token = await grecaptcha.enterprise.execute('{$siteKey}', { action: action });
                                const form = document.getElementById(formId);
                                const input = document.createElement('input');
                                input.type = 'hidden';
                                input.name = 'g-recaptcha-response';
                                input.value = token;
                                form.appendChild(input);
                                form.submit();
                            } catch (error) {
                                console.error('Error executing reCAPTCHA:', error);
                            }
                        });
                    });
                }

                document.addEventListener('DOMContentLoaded', function() {
                    handleRecaptcha('{$formId}', '{$action}');
                });
            </script>
        HTML;
    }

    public static function getAllServices()
    {
        $services = CompanyService::where('is_active', 'active')->get();
        if (isset($services) && count($services) > 0) {
            return $services;
        } else {
            return [];
        }
    }
    public static function getFeaturedServices()
    {
        $services = CompanyService::where('is_active', 'active')->where('is_featured', '1')->get();
        if (isset($services) && count($services) > 0) {
            return $services;
        } else {
            return [];
        }
    }
    public static function getBlogCategories()
    {
        $blogCategories = BlogCategory::with('blogs')->where('is_active', 'active')->get();
        if (isset($blogCategories) && count($blogCategories) > 0) {
            return $blogCategories;
        } else {
            return [];
        }
    }
    public static function topBlogCategories()
    {
        return BlogCategory::withCount(['blogs' => function ($query) {
            $query->where('is_active', 'active');
        }])
        ->orderByDesc('blogs_count')
        ->take(3)
        ->get();
    }

    public static function recentBlogs()
    {
        $blogs = Blog::with('blogCategory','user')
            ->where('is_active', 'active')
            ->latest() // This orders by 'created_at' descending
            ->take(3)   // This limits the results to 3
            ->get();

        return $blogs->isNotEmpty() ? $blogs : [];
    }

    public static function topTags()
    {
        $blogs = Blog::where('is_active', 'active')->pluck('tags'); // Only get tags field
        $allTags = [];

        foreach ($blogs as $tagJson) {
            $tags = json_decode($tagJson, true);
            if (is_array($tags)) {
                foreach ($tags as $tag) {
                    $tag = trim($tag);
                    if (!empty($tag)) {
                        $allTags[] = $tag;
                    }
                }
            }
        }

        // Count each tag
        $tagCounts = array_count_values($allTags);

        // Sort tags by frequency in descending order
        arsort($tagCounts);

        // Return top 10 tags
        return array_slice(array_keys($tagCounts), 0, 10);
    }

    public static function getRandomQuote()
    {
        return Quote::inRandomOrder()->first();
    }

    public static function getAdminDetails()
    {
        $admin = User::with('profile.designation','profile.country')->where('id', 1)->first();
        return $admin;
    }

    public static function getNextBlog($id)
    {
        $nextBlog = Blog::with('blogCategory')->where('is_active', 'active')
                ->where('id', '>', $id)
                ->orderBy('id', 'asc')
                ->first();
        return $nextBlog;
    }
    public static function getPreviousBlog($id)
    {
        $previousBlog = Blog::with('blogCategory')->where('is_active', 'active')
                ->where('id', '<', $id)
                ->orderBy('id', 'desc')
                ->first();
        return $previousBlog;
    }

    public static function getFeaturedProjects()
    {
        $projects = Project::where('is_active', 'active')->where('is_featured', '1')->get();

        return $projects->isNotEmpty() ? $projects : [];
    }
    public static function getCounters()
    {
        $counter = Counter::first();
        return $counter;
    }
    public static function getFrontendSkills()
    {
        $frontendSkills = Skill::where('is_active', 'active')->where('skill_type', 'frontend')->get();
        return $frontendSkills;
    }
    public static function getBackendSkills()
    {
        $backendSkills = Skill::where('is_active', 'active')->where('skill_type', 'backend')->get();
        return $backendSkills;
    }
    public static function getFeaturedSkills()
    {
        $featuredSkills = Skill::where('is_active', 'active')->where('is_featured', '1')->get();
        return $featuredSkills;
    }
    public static function getEducations()
    {
        $educations = Education::where('is_active', 'active')->get();
        return $educations;
    }
    public static function getExperiences()
    {
        $experiences = Experience::where('is_active', 'active')->orderBy('id', 'desc')->get();
        return $experiences;
    }
    public static function getSuppertedCompanies()
    {
        $companies = SupportedCompany::where('is_active', 'active')->get();
        return $companies;
    }
    public static function getTestimonials()
    {
        $testimonials = Testimonial::where('is_active', 'active')->get();
        return $testimonials;
    }

    public static function getCompanyFacebook()
    {
        return CompanySetting::first()->facebook_url ?? null;
    }
    public static function getCompanyInstagram()
    {
        return CompanySetting::first()->instagram_url ?? null;
    }
    public static function getCompanyGithub()
    {
        return CompanySetting::first()->github_url ?? null;
    }
    public static function getCompanyLinkedin()
    {
        return CompanySetting::first()->linkedin_url ?? null;
    }
}
