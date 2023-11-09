<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            'id' => 1,
            'CompanyName' => 'SwafTech',
            'ContactName' => 'Ahmad',
            'City' => 'Damascus',
            'Country' => 'Syria',
            'Phone' => '33324587',
            'Fax' => '33324588'
        ]);

        Supplier::create([
            'id' => 2,
            'CompanyName' => 'Durra',
            'ContactName' => 'سعيد',
            'City' => 'دمشق',
            'Country' => 'سوريا',
            'Phone' => '0113855454'
        ]);

        Supplier::create([
            'id' => 3,
            'CompanyName' => 'كهربائيات المصري',
            'ContactName' => 'محمود',
            'City' => 'حلب',
            'Country' => 'سوريا'
        ]);
    }
}
