<?php

namespace Database\Seeders;

use App\Models\Curriculum;
use Illuminate\Database\Seeder;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curriculum::create([
            'name_en' => 'introduction',
            'name_ar' => 'المقدمه',
            'price' => 200,
            'course_id' => 1
        ]);

        Curriculum::create([
            'name_en' => 'revision',
            'name_ar' => 'المراجعه',
            'price' => 123,
            'course_id' => 1
        ]);
    }
}
