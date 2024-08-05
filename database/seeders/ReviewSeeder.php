<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Review::factory()->create([
            'order_id' => 1,
            'rating' => 5,
            'comment' => 'Makanan enak, pelayanan cepat.'
        ]);

        \App\Models\Review::factory()->create([
            'order_id' => 2,
            'rating' => 4,
            'comment' => 'Makanan enak, pelayanan cepat.'
        ]);

        \App\Models\Review::factory()->create([
            'order_id' => 3,
            'rating' => 3,
            'comment' => 'Makanan enak, pelayanan cepat.'
        ]);
    }
}
