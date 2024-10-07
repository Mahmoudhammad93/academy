<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name_en' => 'unit 1',
            'name_ar' => 'الوحده الاولي',
            'curriculum_id' => 1,
        ]);
    }
}
