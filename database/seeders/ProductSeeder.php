<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'id' => 1,
            'ProductName' => 'Chai',
            'SupplierId' => 1,
            'UnitPrice' => 150
        ]);

        Product::create([
            'id' => 2,
            'ProductName' => 'Rice',
            'SupplierId' => 1,
            'UnitPrice' => 300
        ]);

        Product::create([
            'id' => 3,
            'ProductName' => 'Sugar',
            'SupplierId' => 2,
            'UnitPrice' => 250
        ]);

        Product::create([
            'id' => 4,
            'ProductName' => 'Biscuit',
            'SupplierId' => 3,
            'UnitPrice' => 500
        ]);
    }
}
