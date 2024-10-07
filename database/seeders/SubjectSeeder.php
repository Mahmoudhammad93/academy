<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 3 ; $i++) { 
            Subject::create([
                'name_en' => 'subject ' . $i,
                'name_ar' => "$i  مادة",
                'image' => 'subject.png',
                'code' => 'subject ' . rand(1,100),
                'description' => "This is discription for this subject",
                'description_ar' => "وصف لهذه المادة",
            ]); 
        }
        
    }
}
