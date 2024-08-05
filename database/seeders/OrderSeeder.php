<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Order::factory()->create([
            'meja_id' => 1,
            'invoice_number' => 'INV-2021-0001',
            'customer_name' => 'John Doe',
            'customer_request' => 'No ice',
            'status' => 'pending',
            'total_amount' => 100000,
            'payment_method' => 'qris',
        ]);

        \App\Models\Order::factory()->create([
            'meja_id' => 2,
            'invoice_number' => 'INV-2021-0002',
            'customer_name' => 'John Doe',
            'customer_request' => 'No ice',
            'status' => 'pending',
            'total_amount' => 100000,
            'payment_method' => 'qris',
        ]);

        \App\Models\Order::factory()->create([
            'meja_id' => 3,
            'invoice_number' => 'INV-2021-0003',
            'customer_name' => 'John Doe',
            'customer_request' => 'No ice',
            'status' => 'pending',
            'total_amount' => 100000,
            'payment_method' => 'cash',
        ]);
    }
}
