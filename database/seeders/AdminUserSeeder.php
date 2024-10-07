<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'gender' => "male",
            'image' => "user.png",
            'account_type' => "super_admin",
            'password' => bcrypt(123456789),
        ]);

        $student = User::create([
            'name' => "student",
            'email' => "student@gmail.com",
            'gender' => "male",
            'image' => "user.png",
            'account_type' => "student",
            'password' => bcrypt(123456789),
        ]);

        
        $superAdminRole = Role::where('name','super_admin')->first();
        $allPermissions = Permission::all();

        $superAdminRole->givePermissionTo($allPermissions);
        
        $userAdmin->assignRole('super_admin');
        $student->assignRole('student');
    }
}
