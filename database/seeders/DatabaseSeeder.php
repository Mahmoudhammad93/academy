<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(TermSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CurriculumSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(CountrySeeder::class);
    }
}
