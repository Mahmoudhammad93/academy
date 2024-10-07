<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
                    'name' => 'super_admin',
                    'name_ar' => 'مسئول رئيسى',
                    ]);
        Role::create([
                    'name' => 'admin',
                    'name_ar' => 'مسئول',
                    ]);
        Role::create([
                    'name' => 'teacher',
                    'name_ar' => 'معلم',
                    ]);
        Role::create([
                    'name' => 'student',
                    'name_ar' => 'طالب',
                    ]);
        Role::create([
                    'name' => 'parent',
                    'name_ar' => 'ولي أمر',
                    ]);
    }
}
