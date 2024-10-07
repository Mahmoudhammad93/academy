<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allPermissions = [
            'user' => 'مستخدم',
            'subject' => 'مادة',
            'grade' => 'مرحلة',
            'school' => 'مدرسة',
            'country' => 'دولة',
            'payment' => 'دفع',
            'course' => 'دورة',
            'exam' => 'امتحان',
            'bank' => 'بنك أسئلة',
            'question' => 'سؤال',
            'class' => 'فصل افتراضي',
        ];

        foreach ($allPermissions as $name_en => $name_ar) {

            Permission::create([
                'name' => 'create ' . $name_en,
                'name_ar' =>  ' اضافة ' . $name_ar
            ]);
            Permission::create([
                'name' => 'edit ' . $name_en,
                'name_ar' => ' تعديل ' . $name_ar
            ]);
            Permission::create([
                'name' => 'read ' . $name_en,
                'name_ar' =>  ' عرض ' . $name_ar
            ]);
            Permission::create([
                'name' => 'delete ' . $name_en,
                'name_ar' => ' حذف ' . $name_ar
            ]);
        }

        // $superAdminRole = Role::where('name','super_admin')->get();
    }
}
