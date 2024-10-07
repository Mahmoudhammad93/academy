<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name_en' => 'course 1',
            'name_ar' => 'الدوره 1',
            'code' => 'course' . rand(1,100),
            'description_en' => 'this is description for this course',
            'description_ar' => 'وصف لهذه الدوره',
            'image' => 'course_1.png',
            'price' => 123,
            'subject_id' => 1,
            'term_id' => 1,
            'grade_id' => 1,
            'level_id' => 4,
            
        ]);

        Course::create([
            'name_en' => 'course 2',
            'name_ar' => 'الدوره 2',
            'code' => 'course' . rand(1,100),
            'description_en' => 'this is description for this course',
            'description_ar' => 'وصف لهذه الدوره',
            'image' => 'course_2.png',
            'price' => 200,
            'subject_id' => 2,
            'term_id' => 1,
            'grade_id' => 1,
            'level_id' => 4,            
        ]);
    }
}
