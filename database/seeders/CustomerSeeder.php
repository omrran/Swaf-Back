<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'id' => 1,
            'FirstName' => 'Mohamad',
            'LastName' => 'Zid',
            'City' => 'Beirut',
            'Country' => 'Lebanon',
            'Phone' => '02015485546'
        ]);

        Customer::create([
            'id' => 2,
            'FirstName' => 'Samer',
            'LastName' => 'Salam',
            'City' => 'Damascus',
            'Country' => 'Syria',
            'Phone' => '555456687'
        ]);
    }
}
