<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dname = $this->faker->title();
        $name = $dname . rand(1,10);
        return [
            'name_en' => $name,
            'name_ar' => rand(1,10) . "مادة",
            'slug' => $name,
            'code' => $dname . rand(1,1000),
            'description' => $this->faker->text(),
        ];
    }
}
