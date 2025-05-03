<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            DesignationSeeder::class,
            UserRolePermissionSeeder::class,
            CountrySeeder::class,
            LanguageSeeder::class,
            GenderSeeder::class,
            MaritalStatusSeeder::class,
            TimezoneSeeder::class,
            SettingSeeder::class,
            CompanyServiceSeeder::class,
            BlogCategorySeeder::class,
            BlogSeeder::class,
            QuoteSeeder::class,
            ProjectSeeder::class,
            CounterSeeder::class,
            SkillSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            SupportedCompanySeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
