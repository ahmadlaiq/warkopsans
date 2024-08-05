<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Meja::factory()->create([
            'nomor' => 1,
            'qr_code' => 'https://en.wikipedia.org/wiki/File:QR_code_for_mobile_English_Wikipedia.svg',
            'status' => 'available',
        ]);

        \App\Models\Meja::factory()->create([
            'nomor' => 2,
            'qr_code' => 'https://en.wikipedia.org/wiki/File:QR_code_for_mobile_English_Wikipedia.svg',
            'status' => 'available',
        ]);

        \App\Models\Meja::factory()->create([
            'nomor' => 3,
            'qr_code' => 'https://en.wikipedia.org/wiki/File:QR_code_for_mobile_English_Wikipedia.svg',
            'status' => 'available',
        ]);

        \App\Models\Meja::factory()->create([
            'nomor' => 4,
            'qr_code' => 'https://en.wikipedia.org/wiki/File:QR_code_for_mobile_English_Wikipedia.svg',
            'status' => 'occupied',
        ]);

        \App\Models\Meja::factory()->create([
            'nomor' => 5,
            'qr_code' => 'https://en.wikipedia.org/wiki/File:QR_code_for_mobile_English_Wikipedia.svg',
            'status' => 'occupied',
        ]);
    }
}
