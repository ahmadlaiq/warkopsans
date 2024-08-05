<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Promotion::factory()->create([
            'title' => 'Diskon 20% untuk Menu Baru',
            'description' => 'Rasakan sensasi baru dari menu spesial kami dan nikmati diskon 20% untuk pembelian pertama Anda!',
            'start_date' => '2024-08-01',
            'end_date' => '2024-08-30',
        ]);

        \App\Models\Promotion::factory()->create([
            'title' => 'Beli 1 Gratis 1',
            'description' => 'Nikmati promo beli 1 gratis 1 untuk semua minuman spesial kami. Ajak teman dan keluarga untuk merasakan kelezatan bersama!',
            'start_date' => '2024-08-01',
            'end_date' => '2024-08-30',
        ]);

        \App\Models\Promotion::factory()->create([
            'title' => 'Diskon 50% untuk Menu Spesial',
            'description' => 'Dapatkan diskon 50% untuk pembelian menu spesial kami. Promo ini hanya berlaku untuk hari ini, jadi jangan sampai ketinggalan!',
            'start_date' => '2024-08-01',
            'end_date' => '2024-08-30',
        ]);
    }
}
