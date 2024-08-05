<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\OrderItem::factory()->create([
            'order_id' => 1,
            'menu_item_id' => 1,
            'quantity' => 2,
            'price' => 50000,
            'subtotal' => 100000,
        ]);

        \App\Models\OrderItem::factory()->create([
            'order_id' => 1,
            'menu_item_id' => 2,
            'quantity' => 1,
            'price' => 25000,
            'subtotal' => 25000,
        ]);

        \App\Models\OrderItem::factory()->create([
            'order_id' => 2,
            'menu_item_id' => 3,
            'quantity' => 3,
            'price' => 75000,
            'subtotal' => 225000,
        ]);

        \App\Models\OrderItem::factory()->create([
            'order_id' => 3,
            'menu_item_id' => 4,
            'quantity' => 4,
            'price' => 100000,
            'subtotal' => 400000,
        ]);

        \App\Models\OrderItem::factory()->create([
            'order_id' => 3,
            'menu_item_id' => 5,
            'quantity' => 2,
            'price' => 50000,
            'subtotal' => 100000,
        ]);

        \App\Models\OrderItem::factory()->create([
            'order_id' => 3,
            'menu_item_id' => 6,
            'quantity' => 1,
            'price' => 25000,
            'subtotal' => 25000,
        ]);

        \App\Models\OrderItem::factory()->create([
            'order_id' => 3,
            'menu_item_id' => 7,
            'quantity' => 1,
            'price' => 25000,
            'subtotal' => 25000,
        ]);

        \App\Models\OrderItem::factory()->create([
            'order_id' => 3,
            'menu_item_id' => 8,
            'quantity' => 1,
            'price' => 25000,
            'subtotal' => 25000,
        ]);

        \App\Models\OrderItem::factory()->create([
            'order_id' => 3,
            'menu_item_id' => 9,
            'quantity' => 1,
            'price' => 25000,
            'subtotal' => 25000,
        ]);
    }
}
