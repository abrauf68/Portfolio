<?php

namespace Database\Seeders;

use App\Models\SupportedCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportedCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            // Frontend Skills
            [
                'name' => 'Linear',
                'url' => 'https://linear.app/',
                'logo' => 'frontAssets/images/our-supported-company/company-logo-1.svg'
            ],
            [
                'name' => 'Framer',
                'url' => 'https://framer.app/',
                'logo' => 'frontAssets/images/our-supported-company/company-logo-2.svg'
            ],
            [
                'name' => 'Notion',
                'url' => 'https://notion.com/',
                'logo' => 'frontAssets/images/our-supported-company/company-logo-3.svg',
            ],
            [
                'name' => 'Slack',
                'url' => 'https://slack.com/',
                'logo' => 'frontAssets/images/our-supported-company/company-logo-4.svg',
            ],
            [
                'name' => 'Medium',
                'url' => 'https://medium.com/',
                'logo' => 'frontAssets/images/our-supported-company/company-logo-5.svg',
            ],
            [
                'name' => 'Upwork',
                'url' => 'https://upwork.com/',
                'logo' => 'frontAssets/images/our-supported-company/company-logo-6.svg',
            ],
            [
                'name' => 'Amazon',
                'url' => 'https://amazon.com/',
                'logo' => 'frontAssets/images/our-supported-company/company-logo-7.svg',
            ],
            [
                'name' => 'Asana',
                'url' => 'https://asana.com/',
                'logo' => 'frontAssets/images/our-supported-company/company-logo-8.svg',
            ],
        ];

        foreach ($companies as $company) {
            SupportedCompany::create($company);
        }
    }
}
