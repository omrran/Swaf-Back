<?php

namespace Database\Seeders;

use App\Models\Order;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'id' => 1,
            'OrderDate' => '2020-07-05',
            'OrderNumber' => '5',
            'CustomerId' => 1,
            'TotalAmount' => 1000
        ]);
        //'2020-08-14' 'YYYY-M-D'
        Order::create([
            'id' => 2,
            'OrderDate' => '2020-08-14',
            'OrderNumber' => '8',
            'CustomerId' => 2,
            'TotalAmount' => 600
        ]);
    }
}
