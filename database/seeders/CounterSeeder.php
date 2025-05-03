<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counters = [
            [
                'years_of_experience' => '5',
                'total_projects' => '150',
                'completed_projects' => '80',
                'total_clients' => '100',
                'client_reviews' => '70',
            ],
        ];

        foreach ($counters as $counter) {
            Counter::create($counter);
        }
    }
}
