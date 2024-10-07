<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name_en' => 'Egypt',
            'name_ar' => 'مصر',
        ]);

        Country::create([
            'name_en' => 'KSA',
            'name_ar' => 'السعودية',
        ]);
    }
}
