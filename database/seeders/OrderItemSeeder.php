<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderItem::create([
            'id' => 1,
            'OrderId' => 1,
            'ProductId' => 4,
            'UnitPrice' => 500,
            'Quantiy' => 2
        ]);

        OrderItem::create([
            'id' => 2,
            'OrderId' => 2,
            'ProductId' => 3,
            'UnitPrice' => 300,
            'Quantiy' => 1
        ]);

        OrderItem::create([
            'id' => 3,
            'OrderId' => 2,
            'ProductId' => 2,
            'UnitPrice' => 300,
            'Quantiy' => 1
        ]);
    }
}
