<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            Grade::create([
                'name_en' => 'Grade ' . $i,
                'name_ar' =>  $i . ' مرحلة' ,
                'parent_id' => 0,
            ]);
        }

        for ($i=1; $i <= 3 ; $i++) { 
            Grade::create([
                'name_en' => 'level ' .$i ,
                'name_ar' => "$i صف ",
                'parent_id' => 1,
            ]);
        }

        for ($i=4; $i <= 6 ; $i++) { 
            Grade::create([
                'name_en' => 'level ' .$i ,
                'name_ar' => "$i صف ",
                'parent_id' => 2,
            ]);
        }

        for ($i=7; $i <= 9 ; $i++) { 
            Grade::create([
                'name_en' => 'level ' .$i ,
                'name_ar' => "$i صف ",
                'parent_id' => 3,
            ]);
        }
    }
}
