<?php

namespace Database\Seeders;

use App\Models\Term;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Term::create([
            'name_ar' => 'الفصل الدراسى الأول',
            'name_en' => 'First Term',        
        ]);

        Term::create([
            'name_ar' => 'الفصل الدراسى الثانى',
            'name_en' => 'Second Term',
        ]);
    }
}
