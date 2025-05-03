<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Cameron Williamson',
                'image' => 'frontAssets/images/testimonial/bg-image-1png.png',
                'designation' => 'Ui/Ux Designer',
                'review_count' => 5,
                'review' => 'Working with Abdul rauf was an absolute pleasure! He understood my vision immediately and brought it to life even better than I’d imagined.',
                'is_active' => 'active',
            ],
            [
                'name' => 'Michael Lee',
                'image' => 'frontAssets/images/testimonial/bg-image-2.png',
                'designation' => 'Private Owner',
                'review_count' => 5,
                'review' => 'Abdul Rauf is incredibly talented and detail-oriented. He took the time to understand my brand and created something truly unique',
                'is_active' => 'active',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
